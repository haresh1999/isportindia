<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CricSpecial extends Model
{
    protected $fillable = [
        'created_by',
        'views',
        'likes',
        'title',
        'slug',
        'short_description',
        'description',
        'status',
        'img',
        'min'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'id','created_by');
    }
}
