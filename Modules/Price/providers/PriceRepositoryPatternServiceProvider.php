<?php

namespace Modules\Price\providers;

use Illuminate\Support\ServiceProvider;
use Modules\Price\Database\Repositories\Contracts\PriceRepositoryInterface;
use Modules\Price\Database\Repositories\Repos\PriceRepository;

class PriceRepositoryPatternServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PriceRepositoryInterface::class,PriceRepository::class);
    }
}
