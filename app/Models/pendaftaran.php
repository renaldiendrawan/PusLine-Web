<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran'; // Mengubah nama tabel sesuai dengan nama tabel yang sesuai di database Anda

    protected $fillable = [
        'id_antrian',
        'nik',
        'id_poli',
        'tanggal_pendaftaran',
        'deskripsi_keluhan',
        'status_pendaftaran',
        'antrian'
    ];

    // Jika diperlukan, Anda dapat menambahkan relasi atau metode lain di sini
    public static function getallData()
    {
        return self::all();
    }

    public static function getData()
    {
        return self::all();
    }
}