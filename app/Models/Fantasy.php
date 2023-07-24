<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fantasy extends Model
{
    protected $fillable = [
        'name',
        'link',
        'img',
        'status',
    ];

    public function article()
    {
        return $this->belongsToMany(Article::class);
    }
}
