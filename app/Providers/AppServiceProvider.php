<?php

namespace App\Providers;

use App\Models\Post2;
use App\Observers\PostObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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

        Post2::observe(PostObserver::class);

        Paginator::useBootstrap();
    }
}
