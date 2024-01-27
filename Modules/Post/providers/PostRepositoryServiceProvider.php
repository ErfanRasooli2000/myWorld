<?php

namespace providers;

use Illuminate\Support\ServiceProvider;
use PostPatternInterface;
use Repos\PostRepository;

class PostRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PostPatternInterface::class , PostRepository::class);
    }
}
