<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'created_by',
        'views',
        'likes',
        'title',
        'description',
        'status',
        'img',
        'slug',
        'category',
        'type',
        'cid',
        'min',
        'short_description',
        'fantasy_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'id','created_by');
    }

    public function fantasy()
    {
        return $this->belongsToMany(Fantasy::class);
    }
}
