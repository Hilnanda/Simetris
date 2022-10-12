<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'sosmed';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'sosmed_username',
        'sosmed_nama',
        'sosmed_url',
        'sosmed_icon',
    ];
}
