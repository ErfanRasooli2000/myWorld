<?php

namespace Modules\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Comment\Database\Factories\CommentFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        "text",
    ];
    public static function newFactory()
    {
        return CommentFactory::new();
    }
}
