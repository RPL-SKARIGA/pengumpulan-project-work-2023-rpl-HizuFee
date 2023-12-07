<?php


namespace App\Models;

use CodeIgniter\Model;

class JasaModel extends Model
{
    protected $table      = 'jasa';
    protected $primaryKey = 'id_jasa';

    protected $allowedFields = ['nama_jasa', 'harga']; // Add other fields as needed
}
