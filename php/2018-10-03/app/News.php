<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    protected $fillable = array('title', 'slug', 'short_description', 'full_content', 'author', 'category', 'created_at', 'updated_at');
}
