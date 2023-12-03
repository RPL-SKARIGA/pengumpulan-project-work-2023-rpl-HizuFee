<?php

namespace App\Models;

use CodeIgniter\Model;

class admin extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['username', 'password', 'created_at'];
}
class Admin_model extends Model
{
    protected $table = 'admin';

    public function countAdmin()
    {
        return $this->countAll(); // Menghitung jumlah baris dalam tabel 'admin'
    }
}
