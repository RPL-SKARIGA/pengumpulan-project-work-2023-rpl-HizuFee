<?php

namespace App\Controllers;

class jasa extends BaseController
{
    public function index()
    { {
            $builder = $this->db->table('jasa');
            $query   = $builder->get()->getResult();

            $data['jasa'] = $query;
            return view('admin/jasa', $data);
            return view('admin/jasa');
        }
    }
}
