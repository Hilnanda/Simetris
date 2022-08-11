<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'message';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'message_nama',
        'message_email',
        'message_text',
    ];
}
