<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::all();
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =Category::all();
      return view('admin.articles.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {

       // Article::create($request->validated());
        if ($request->hasFile('image')){
            $imagePath=$request->file('image')->store('articles','public');
        }
            $article=new Article();
            $article->title=$request->input('title');
            $article->category_name =$request->input('category_name');
            $article->image=$imagePath;
            $article->content=$request->input('content');
            $article->save();
            return redirect()->route('admin.articles.index');

        }



/**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles=Article::find($id);

        return view('admin.articles.show', compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articles=Article::find($id);
        $categories=category::all();
        return view('admin.articles.edit',compact('articles','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, string $id)
    {
       // Article::find($id)->update($request->validated());
        //return redirect()->route('admin.articles.index');
        if ($request->hasFile('image')){
            $imagePath=$request->file('image')->store('articles','public');
        }
            $article=Article::find($id);
            $article->title=$request->input('title');
            $article->category_name =$request->input('category_name');
            $article->image=$imagePath;
            $article->content=$request->input('content');
            $article->save();
            return redirect()->route('admin.articles.index');

        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

        $article =Article::find($id);
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
