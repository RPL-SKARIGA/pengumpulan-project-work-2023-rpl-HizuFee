<?php

namespace App\Controllers;

class admin extends BaseController
{
    public function delete_pesanan($id_pesanan)
    {
        $pesananModel = new \App\Models\PesananModel();
        $pesananModel->delete($id_pesanan);

        // Redirect with SweetAlert2 notification
        session()->setFlashdata('success', 'Pesanan berhasil dihapus!');
        return redirect()->to(site_url('admin/list_pesanan'));
    }

    public function edit_pesanan($id_pesanan = null)
    {
        $pesananModel = new \App\Models\PesananModel();

        if ($id_pesanan != null) {
            $data['row'] = $pesananModel->find($id_pesanan);

            if ($data['row']) {
                return view('edit_pesanan', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }



    public function update_pesanan($id_pesanan)
    {
        $data = $this->request->getPost();
        $pesananModel = new \App\Models\PesananModel();

        // Proses validasi atau manipulasi data lainnya jika diperlukan

        unset($data['_method']);

        $pesananModel->update($id_pesanan, $data);

        // Redirect with SweetAlert2 notification
        session()->setFlashdata('success', 'Pesanan berhasil diupdate!');
        return redirect()->to(site_url('admin/list_pesanan'));
    }


    public function list_pesanan()
    {
        // Load the Pesanan model
        $pesananModel = new \App\Models\PesananModel(); // Check the namespace

        // Retrieve pesanan data from the database
        $data['pesanan'] = $pesananModel->findAll();

        // Pass data to the view
        return view('list_pesanan', $data); // Adjust the view file path
    }
    public function index()
    {
        $builder = $this->db->table('admin');
        $query   = $builder->get()->getResult();

        $data['admin'] = $query;
        return view('admin/admin', $data);
    }
    public function showkasir()
    {
        $builder = $this->db->table('kasir');
        $query   = $builder->get()->getResult();

        $data['kasir'] = $query;
        return view('admin/kasir', $data);
    }
    public function jumlah()
    {
        $adminModel = new admin();

        // Mendapatkan jumlah admin
        $totalAdmin = $adminModel->jumlah();

        // Kirim data ke tampilan
        $data['totalAdmin'] = $totalAdmin;

        // Tampilkan tampilan dengan data
        return view('home   /index', $data);
    }
    public function Create()
    {
        return view('admin/addkasir');
    }
    public function jasa()
    {
        // $data = $this->request->getPost();
        // $jasa = $this->request->getVar('nama_jasa');
        // $harga = $this->request->getVar('harga');

        // // Make sure the received data matches the structure of the 'jasa' table
        // $jasaData = [
        //     'nama_jasa' => $jasa,
        //     'harga' => $harga, // Corrected from 'password_kasir' to 'harga'
        // ];

        // // Save data to the 'jasa' table
        // $this->db->table('jasa')->insert($jasaData);

        // // Check if the storage was successful
        // if ($this->db->affectedRows() > 0) {
        //     return redirect()->to(site_url('jasa'));
        // } else {
        //     // Handle if there is an error while saving data
        //     return redirect()->back()->with('error', 'Failed to save jasa data.');
        // }

        return view('admin/addjasa');
    }
    public function addjasa()
    {
        $jasa = $this->request->getVar('nama_jasa');
        $harga = $this->request->getVar('harga');

        $jasaData = [
            'nama_jasa' => $jasa,
            'harga' => $harga,
        ];

        $this->db->table('jasa')->insert($jasaData);

        // Check if the storage was successful
        if ($this->db->affectedRows() > 0) {
            // Set flashdata if the operation is successful
            session()->setFlashdata('success', 'Jasa berhasil ditambah');
            return redirect()->to(site_url('jasa'));
        } else {
            // Handle if there is an error while saving data
            return redirect()->back()->with('error', 'jasa Gagal Ditambah.');
        }
    }

    public function simpan_kasir()
    {
        $data = $this->request->getPost();


        $kasirData = [
            'username_kasir' => $data['username_kasir'],
            'password_kasir' => password_hash($data['password_kasir'], PASSWORD_DEFAULT),
        ];


        $this->db->table('kasir')->insert($kasirData);

        // Periksa apakah penyimpanan berhasil
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('kasir'));
        } else {
            // Handle jika terjadi kesalahan saat menyimpan data
            return redirect()->back()->with('error', 'Gagal menyimpan data kasir.');
        }
    }
    public function simpan_admin()
    {
        $data = $this->request->getPost();


        $adminData = [
            'username' => $data['username'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
        ];


        $this->db->table('admin')->insert($adminData);

        // Periksa apakah penyimpanan berhasil
        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('admin'));
        } else {
            // Handle jika terjadi kesalahan saat menyimpan data
            return redirect()->back()->with('error', 'Gagal menyimpan data kasir.');
        }
    }
    public function edit($id = null)
    {
        $data['flashdata'] = session()->getFlashdata('success'); // Set $flashdata here

        if ($id != null) {
            $query = $this->db->table('admin')->getwhere(['id' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['admin'] = $query->getRow();

                return view('admin/edit_admin', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function edit_jasa($id_jasa = null)
    {
        if ($id_jasa != null) {
            $query = $this->db->table('jasa')->getwhere(['id_jasa' => $id_jasa]);
            if ($query->resultID->num_rows > 0) {
                $data['jasa'] = $query->getRow();
                return view('admin/edit_jasa', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function editkasir($id_kasir = null)
    {
        if ($id_kasir != null) {
            $query = $this->db->table('kasir')->getwhere(['id_kasir' => $id_kasir]);
            if ($query->resultID->num_rows > 0) {
                $data['kasir'] = $query->getRow();
                return view('admin/edit_kasir', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function delete($id)
    {
        $this->db->table('admin ')->where(['id' => $id])->delete();
        return redirect()->to(site_url('admin'))->with('success', 'data berhasil di hapus');
    }
    public function update($id)
    {
        $data = $this->request->getPost();

        // Proses validasi atau manipulasi data lainnya jika diperlukan

        // Jika password diubah, hash password baru sebelum menyimpan ke database
        if (!empty($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        } else {
            // Jika password tidak diubah, hapus kunci 'password' dari $data
            unset($data['password']);
        }

        unset($data['_method']);

        $this->db->table('admin')->where(['id' => $id])->update($data);


        return redirect()->to(site_url('admin'));
    }
    public function updatekasir($id_kasir)
    {
        $data = $this->request->getPost();

        // Proses validasi atau manipulasi data lainnya jika diperlukan

        // Jika password diubah, hash password baru sebelum menyimpan ke database
        if (!empty($data['password_kasir'])) {
            $data['password_kasir'] = password_hash($data['password_kasir'], PASSWORD_DEFAULT);
        } else {
            // Jika password tidak diubah, hapus kunci 'password' dari $data
            unset($data['password_kasir']);
        }

        unset($data['_method']);

        $this->db->table('kasir')->where(['id_kasir' => $id_kasir])->update($data);


        return redirect()->to(site_url('kasir'));
    }

    public function deletekasir($id_kasir)
    {
        $this->db->table('kasir')->where(['id_kasir' => $id_kasir])->delete();
        return redirect()->to(site_url('admin/kasir'))->with('success', 'Data kasir berhasil dihapus.');
    }


    public function editjasa($id_jasa = null)
    {
        if ($id_jasa != null) {
            $query = $this->db->table('jasa')->getWhere(['id_jasa' => $id_jasa]);
            if ($query->resultID->num_rows > 0) {
                $data['jasa'] = $query->getRow();
                return view('admin/edit_jasa', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function updatejasa($id_jasa)
    {
        $data = $this->request->getPost();

        // Remove the '_method' key from the data
        unset($data['_method']);

        // Update the data in the 'jasa' table
        $this->db->table('jasa')->where(['id_jasa' => $id_jasa])->update($data);

        // Check if the update was successful
        if ($this->db->affectedRows() > 0) {
            // Set flashdata for success
            session()->setFlashdata('success', 'Jasa updated successfully.');
        } else {
            // Set flashdata for an error if needed
            session()->setFlashdata('error', 'Failed to update jasa.');
        }

        // Redirect to the 'jasa' page with a success message
        return redirect()->to(site_url('admin/jasa'))->with('success', 'Jasa updated successfully.');
    }
    public function deletejasa($id_jasa)
    {
        // Tambahkan SweetAlert2 di sini
        echo view('admin/delete_confirmation');

        // Setelah itu, jalankan script penghapusan jika pengguna mengonfirmasi
        echo '<script>
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Data jasa akan dihapus!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, hapus!",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke fungsi delete sesuai dengan ID jasa
                    window.location.href = "' . site_url("admin/deletejasa/{$id_jasa}") . '";
                }
            });
        </script>';

        $this->db->table('jasa')->where(['id_jasa' => $id_jasa])->delete();
        return redirect()->to(site_url('admin/jasa'))->with('success', 'Data jasa berhasil dihapus.');
    }
    public function simpan_pesanan()
    {
        $data = $this->request->getPost();
        $jasa = $this->db->table('jasa')->where('id_jasa', $data['id_jasa'])->get()->getRow();

        // Retrieve the kasir name from the session
        $kasirName = session()->get('username_kasir') ?? 'Guest';

        $pesananData = [
            'id_jasa' => $data['id_jasa'],
            'alamat' => $data['alamat'],
            'no_hp' => $data['no_hp'],
            'jumlah' => $data['jumlah'] * $jasa->harga,
            'tanggal' => date('Y-m-d'),
            'status' => 'Pending',
            'nama_pelanggan' => $data['nama_pelanggan'],
            'nama_kasir' => $kasirName,
        ];

        $this->db->table('pesanan')->insert($pesananData);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('list_jasa'))->with('success', 'Pesanan berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan pesanan.');
        }
    }
}
