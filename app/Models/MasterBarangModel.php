<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterBarangModel extends Model
{
    protected $table = 'tbl_master_barang';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode','tipe', 'kelompok', 'kd1', 'kd2', 'kd3', 'kd4', 'kd5', 'kd6', 'nama_barang', 'satuan'];
}
