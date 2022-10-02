<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'portofolio';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'portofolio_image',
        'portofolio_title',
        'portofolio_category_id',
        'portofolio_desc',
    ];

    /**
     * Get the category for the article.
     */
    public function categoryPortofolio()
    {
        return $this->belongsTo(CategoryPortofolio::class, 'portofolio_category_id', 'id');
    }
}
