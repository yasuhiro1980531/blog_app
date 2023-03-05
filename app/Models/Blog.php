<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;
    
    //可変項目
    protected $fillable = 
    [
        'title',
        'content'
    ];
}
