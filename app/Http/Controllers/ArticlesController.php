<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    //

    public function index(){
        $articles = Article::all();

        return view('article.index', compact('articles'));
    }

    public function show($id){

        $article = Article::findOrFail($id);

        return view('article.show', compact('article'));

    }
}
