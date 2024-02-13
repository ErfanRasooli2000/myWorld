<?php

namespace Modules\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Database\Factories\PostFactory;
use Modules\User\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "text",
        "created_by",
    ];

    public static function newFactory(): PostFactory|\Illuminate\Database\Eloquent\Factories\Factory
    {
        return PostFactory::new();
    }

    public function creator()
    {
        return $this->belongsTo(User::class , 'created_by');
    }
}
