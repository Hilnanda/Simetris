<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'carousell';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'carousell_image',
        'carousell_title',
        'carousell_desc',
    ];
}
