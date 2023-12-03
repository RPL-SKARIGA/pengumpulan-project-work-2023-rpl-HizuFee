<?php

namespace App\Controllers;

class Pesanan extends BaseController
{
    protected $pesananModel;
    protected $jasa;

    public function __construct()
    {
        $this->pesananModel = new \App\Models\PesananModel(); // Load the model in the constructor
    }

    public function index()
    {
        return view('admin/pesanan');
    }

    public function form($id_jasa)
    {
        $this->jasa = $this->db->table('jasa')->where('id_jasa', $id_jasa)->get()->getRow();

        // Pass data to the view
        return view('admin/PesananForm', ['jasa' => $this->jasa, 'id_kasir' => session()->get('id_kasir')]);
    }

    public function simpan()
    {
        if (!$this->request->isAJAX() && !$this->request->isPost()) {
            // Redirect or show an error message
            return redirect()->to('list_jasa')->with('error', 'Invalid request method.');
        }

        // Contoh: Ambil data dari $_POST
        $id_jasa = $this->request->getPost('id_jasa');
        $id_kasir = $this->request->getPost('id_kasir');
        $alamat = $this->request->getPost('alamat');
        $no_hp = $this->request->getPost('no_hp');
        $jumlah = $this->request->getPost('jumlah');
        $tanggal = $this->request->getPost('tanggal');

        // Validate and calculate total harga
        if (!$this->jasa || !$id_kasir || !$alamat || !$no_hp || !$jumlah || !$tanggal) {
            // Handle validation errors, redirect, or show an error message
            return redirect()->to('list_jasa')->with('error', 'Invalid form data.');
        }

        // Ensure $jumlah is a numeric value
        $jumlah = is_numeric($jumlah) ? $jumlah : 0;

        $total_harga = $jumlah * $this->jasa->harga;

        // Set data to be inserted into the database
        $data = [
            'id_jasa' => $id_jasa,
            'id_kasir' => $id_kasir,
            'alamat_pelanggan' => $alamat,
            'no_hp_pelanggan' => $no_hp,
            'jumlah_pesanan' => $jumlah,
            'total_harga' => $total_harga,
            'tanggal_pesanan' => $tanggal,
        ];

        // Insert data into the database
        $inserted = $this->pesananModel->insert($data);

        if (!$inserted) {
            // Tampilkan pesan error jika ada
            $error = $this->pesananModel->errors();
            log_message('error', 'Database Error: ' . $this->db->error()['message']);
            print_r($error); // Cetak pesan error ke layar atau log
        } else {
            // Data berhasil disimpan
            return redirect()->to('list_jasa')->with('success', 'Pesanan berhasil disimpan.');
        }
    }

    public function edit_pesanan($id_pesanan = null)
    {
        $pesananModel = new \App\Models\PesananModel();

        if ($id_pesanan != null) {
            $data['row'] = $pesananModel->find($id_pesanan);

            if ($data['row']) {
                return view('admin/edit_pesanan', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
