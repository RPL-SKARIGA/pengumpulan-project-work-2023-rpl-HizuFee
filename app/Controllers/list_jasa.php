<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Database\Query;

class List_jasa extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('jasa');
        $query   = $builder->get();
        $data['jasas'] = $query->getResult();

        return view('list_jasa', $data);
    }
}
