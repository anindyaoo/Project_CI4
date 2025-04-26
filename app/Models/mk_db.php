<?php

namespace App\Models;

use CodeIgniter\Model;

class mk_db extends Model
{
    protected $table = 'matkul';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'deskripsi',
        'gambar',
        'nama_mk',
        'jam',
        'dosen',
        'link_gc',
        'link_wa'
    ];
}