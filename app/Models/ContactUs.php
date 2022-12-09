<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'contact_us';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'contact_us_title',
        'contact_us_address',
        'contact_us_telp',
        'contact_us_email',
        'contact_us_cordinate',
    ];
}
