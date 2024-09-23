<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $articles=Article::all();
        $categories=Category::all();
        return view('front.index',compact('articles','categories'));
    }
    public function  show($slug)
    {
        $articles=Article::where('slug',$slug)->firstOrFail();
        $categories=Category::all();
        return view('front.show',compact('articles','categories'));
    }

     public function about(){
        //dd(5);
        return view('front.layouts.about');
    }
}
