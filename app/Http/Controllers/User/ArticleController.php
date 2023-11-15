<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::with('category')->get();
        $recent_article = Article::orderBy('created_at', 'desc')->take(5)->get();

        return view(
            'user.pages.article',
            compact('article','recent_article')
        );
    }
}
