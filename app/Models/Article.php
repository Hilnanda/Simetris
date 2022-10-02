<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
    //deklarasikan nama tabel di db
    protected $table = 'article';
    //deklarasi field yang bisa diisi pada table
    protected $fillable = [
        'article_image',
        'article_title',
        'article_category_id',
        'article_desc',
    ];

    /**
     * Get the category for the article.
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'article_category_id', 'id');
    }
}
