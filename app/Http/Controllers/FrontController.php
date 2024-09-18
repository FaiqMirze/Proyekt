<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $articles=Article::all();
        return view('front.index',compact('articles'));
    }
    public function  show($id)
    {
        $articles=Article::findOrFail($id);
        return view('front.show',compact('articles'));
    }
}
