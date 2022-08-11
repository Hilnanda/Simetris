<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'feature';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'feature_icon',
        'feature_title',
        'feature_desc',
    ];
}
