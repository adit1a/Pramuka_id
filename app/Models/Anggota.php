<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable=[
        'nta','nama_lengkap','tempat_lahir', 'tanggal_lahir', 'agama', 'alamat', 
        'pangkalan', 'ambalan', 'sertifikat_sfh', 'foto_pramuka'  ];
}
