<?php

namespace Modules\Post\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Post\Database\Repositories\Contracts\PostPatternInterface;
use Modules\Post\Database\Repositories\Repos\PostRepository;

class PostRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PostPatternInterface::class , PostRepository::class);
    }
}
