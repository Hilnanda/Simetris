<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'product';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'product_image',
        'product_title',
        'product_desc',
        'product_price',
    ];
}
