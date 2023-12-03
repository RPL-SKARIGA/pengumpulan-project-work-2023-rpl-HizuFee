<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\admin;
use App\Models\User;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('auth/login');
    }

    public function auth()
    {
        $session = session();
        $model = new admin();
        $username = $this->request->getVar('username'); // Mengambil username dari input form
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first(); // Mencari data berdasarkan username

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],

                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Username / Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username / Password salah');
            return redirect()->to('/login');
        }
    }


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
