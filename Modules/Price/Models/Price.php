<?php

namespace Modules\Price\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Price\Database\Factories\PriceFactory;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        "price",
        "discounted_price",
    ];

    public static function newFactory()
    {
        return PriceFactory::new();
    }
}
