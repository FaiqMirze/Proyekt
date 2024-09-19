<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public  function category()
    {
        return $this->hasOne(Category::class,'name','category_name');
    }
    protected $fillable = ['title', 'slug', 'content', 'image', 'category_name'];

    use HasFactory;
}
