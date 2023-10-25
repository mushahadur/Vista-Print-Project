<?php

namespace App\Providers;

use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(UserRepositoryInterface::class , UserRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class , CategoryRepository::class);
        $this->app->bind(PostRepositoryInterface::class , PostRepository::class);
    }
}
