<?php

namespace App\Models;

use CodeIgniter\Model;

class TranskripNilaiModel extends Model
{
    protected $table = 'transkrip_nilai';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_taruna'];

    // Jika Anda menggunakan database, pastikan konfigurasi database telah dilakukan di file app/Config/Database.php
}
