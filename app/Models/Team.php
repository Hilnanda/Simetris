<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'team';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'team_image',
        'team_name',
        'team_posisi',
        'team_desc',
    ];
}
