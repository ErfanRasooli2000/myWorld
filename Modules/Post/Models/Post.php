<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "text",
    ];

    public static function newFactory()
    {
        return PostFactory::new();
    }
}
