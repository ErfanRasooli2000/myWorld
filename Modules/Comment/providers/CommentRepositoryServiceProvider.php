<?php

namespace Modules\Comment\providers;

use Illuminate\Support\ServiceProvider;
use Modules\Comment\Database\Repositories\Contracts\CommentRepositoryInterface;
use Modules\Comment\Database\Repositories\Repos\CommentRepository;

class CommentRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CommentRepositoryInterface::class , CommentRepository::class);
    }
}
