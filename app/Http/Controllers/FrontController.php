<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $articles=Article::paginate(3);
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
    public function contact()
    {
        return view('front.layouts.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);
        return redirect()->route('front.contact')->with('success', 'you have ben registered succsessfully');

    }
    public function vakansia()
    {
        return view('front.layouts.vakansia');
    }


    public function category($name){
        $categories = Category::whereName($name)->first() ?? abort(404,'Bele bir kategori yoxdur!');
        $articles = $categories->articles()->paginate(4);
        return view('front.layouts.category', compact('categories', 'articles'));
    }


}
