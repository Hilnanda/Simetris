<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Repositories\ArticleRepository;
use App\Repositories\categoryRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * ArticleRepository repository.
     *
     * @var \App\Repositories\ArticleRepository
     */
    protected $articles;

    /**
     * ArticleRepository repository.
     *
     * @var \App\Repositories\CategoryRepository
     */
    protected $categories;

    /**
     * Create a new controller instance.
     *
     * @param Request           $request
     *
     * @return void
     */
    public function __construct(ArticleRepository $articles,CategoryRepository $categories) {
        $this->articles = $articles;
        $this->categories = $categories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = $this->articles->getAll();
        $category = $this->categories->getAll();
        
        return view('admin.pages.home-article',compact('article','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input['article_image'] = time() . '.' . $request->article_image->getClientOriginalExtension();
        $request->article_image->move(public_path('image/article/'), $input['article_image']);
        $input['article_title'] = $request->article_title;
        $input['article_category_id'] = $request->article_category_id;
        $input['article_desc'] = $request->article_desc;
        Article::create($input);
        return back()->with('Success', 'Successfully added data!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $article = Article::find($request->id);

        if ($request->article_image != '') {
            $path = public_path() . '/image/article/';

            //code for remove old file
            if ($article->article_image != ''  && $article->article_image != null) {
                $file_old = $path . $article->article_image;
                unlink($file_old);
            }

            //upload new file
            $file = $request->article_image;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            // dd($filename);
            $input['article_image'] = $filename;
            $input['article_title'] = $request->article_title;
            $input['article_desc'] = $request->article_desc;
            $article->update($input);
        } else {
            $article->update($request->all());
        }


        return redirect('../home-article')->with('Success', 'Successfully updated data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();

        return back()->with('Success', 'Successfully delete data!');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $category = Category::all();
        return view('admin.pages.edit-article',compact('article','category'));
    }
}
