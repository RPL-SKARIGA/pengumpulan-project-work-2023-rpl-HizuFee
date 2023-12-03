<?php

namespace App\Controllers;

class kasir extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('kasir');
        $query   = $builder->get()->getResult();

        $data['kasir'] = $query;
        return view('admin/kasir', $data);
    }
    public function dashboard()
    {
        // Cek apakah kasir sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login_kasir'); // Redirect ke halaman login jika belum login
        }

        $builder = $this->db->table('kasir');
        $query   = $builder->get()->getResult();

        $data['kasir'] = $query;
        return view('kasir_dashboard', $data);
    }
}
