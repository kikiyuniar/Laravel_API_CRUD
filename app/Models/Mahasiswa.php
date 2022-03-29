<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    public $timestamps = false;
    protected $primaryKey = 'npm_mahasiswa';

    protected $fillable = [
        'npm_mahasiswa',
        'nama_mahasiswa',
        'jenis_kelamin',
        'alamat'
    ];
}
