<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fantacy extends Model
{
    protected $fillable = [
        'name',
        'link',
        'img',
        'status',
    ];
}
