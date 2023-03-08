<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    function index(){
        return view('article', [
            'article' => Article::all()
        ]);
    }
}
