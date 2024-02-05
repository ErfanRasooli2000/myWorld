<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
