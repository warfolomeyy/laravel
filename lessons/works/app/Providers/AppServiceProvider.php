<?php

namespace App\Providers;

use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Repositories\Interfaces\userRepositoryInterface;
use App\Repositories\PostRepository;
use App\Services\AuthService;
use App\Services\Interfaces\AuthServiceInterface;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);

        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('components.pagination');
        Paginator::defaultSimpleView('components.pagination');
    }
}
