<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Article;
use App\model\ArticleCategory;
use App\model\Comment;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = ArticleCategory::with('articles')->get();
        return view('articles.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    public function category_details($id)
    {
        $category = ArticleCategory::find($id);
        $articles = Article::where('article_category_id', $category->id)->paginate(10);
        return view('articles.category_details', compact('category', 'articles'));
    }
}
