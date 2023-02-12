<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $allowedFields = ['nama', 'nim', 'jurusan', 'fakultas', 'alamat'];
    protected $useTimestamps = true;
}
