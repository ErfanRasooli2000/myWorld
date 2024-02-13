<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Models\Post;
use Modules\User\Database\Factories\UserFactory;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "mobile",
        "password",
        "is_active"
    ];

    protected $hidden = [
        "password",
        "remember_token",
    ];

    public static function newFactory()
    {
        return UserFactory::new();
    }

    public function posts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Post::class , 'created_by');
    }
}
