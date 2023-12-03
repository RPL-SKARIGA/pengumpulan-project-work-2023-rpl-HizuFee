<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\admin;
use App\Models\User;

class Register extends BaseController
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('auth/register', $data);
    }

    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'username'      => 'required|min_length[3]|max_length[20]',

            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new admin();
            $data = [
                'username'     => $this->request->getVar('username'),

                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('auth/register', $data);
        }
    }
}
