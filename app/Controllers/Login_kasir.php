<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kasir;
use CodeIgniter\Config\Services;

class Login_kasir extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('auth/login_kasir');
    }

    public function auth()
    {
        $session = session();
        $model = new Kasir();
        $username = $this->request->getVar('username_kasir');
        $password = $this->request->getVar('password_kasir');
        $data = $model->where('username_kasir', $username)->first();

        if ($data) {
            $pass = $data['password_kasir'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id_kasir' => $data['id_kasir'],
                    'username_kasir' => $data['username_kasir'],
                    'logged_in' => true
                ];
                $session->set($ses_data);
                return redirect()->to('/kasir_dashboard');
            } else {
                $session->setFlashdata('msg', 'Username / Password salah');
                return redirect()->to('/login_kasir');
            }
        } else {
            $session->setFlashdata('msg', 'Username / Password salah');
            return redirect()->to('/login_kasir');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login_kasir');
    }
}
