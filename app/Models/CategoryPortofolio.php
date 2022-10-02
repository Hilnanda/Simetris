<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPortofolio extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'category_portofolio';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'category_portofolio_name',
    ];

}
