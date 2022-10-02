<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'category';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'category_name',
    ];
    
}
