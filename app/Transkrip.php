<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transkrip extends Model
{
    protected $table = 'mahasiswa_529';
    protected $fillable = [
        'NIM',
        'Nama',
        'Alamat',
        'IPK',
        'Foto',
    ];
}
