<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleFantasy extends Model
{
    protected $table = 'article_fantasy';

    protected $fillable = [
        'article_id',
        'fantasy_id'
    ];
}