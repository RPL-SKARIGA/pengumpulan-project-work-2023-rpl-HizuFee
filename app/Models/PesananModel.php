<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    protected $allowedFields = ['id_jasa', 'nama_jasa', 'alamat', 'no_hp', 'jumlah', 'tanggal', 'status', 'nama_pelanggan', 'nama_kasir'];
}
