<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    public function getAll()
    {
        return Article::all();
    }
}
