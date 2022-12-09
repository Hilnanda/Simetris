<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'about_us';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'about_us_image',
        'about_us_desc',
    ];
}
