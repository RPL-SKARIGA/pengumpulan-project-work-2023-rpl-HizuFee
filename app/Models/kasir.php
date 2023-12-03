<?php



namespace App\Models;

use CodeIgniter\Model;

class Kasir extends Model
{
    protected $table      = 'kasir';
    protected $primaryKey = 'id_kasir';

    protected $allowedFields = ['username_kasir', 'password_kasir'];
}
