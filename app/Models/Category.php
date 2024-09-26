<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    use HasFactory;


    public function articles()
    {
        return $this->hasMany(Article::class,'category_name','name');

    }
    public function articleCount()
    {
        return $this->articles()->count();
    }




}
