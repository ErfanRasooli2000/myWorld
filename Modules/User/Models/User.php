<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Database\Factories\UserFactory;

class User extends Model
{
    use HasFactory;
    protected $fillable = [];

    public static function newFactory()
    {
        return UserFactory::new();
    }
}
