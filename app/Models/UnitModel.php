<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitModel extends Model
{
    protected $table = 'tbl_unit';
    protected $primaryKey = 'id_unit';
    protected $allowedFields = ['kode_urusan','kode_bidang', 'kode_unit', 'nama_unit', 'singakatan_unit', 'fid_barang', 'metode'];
}
