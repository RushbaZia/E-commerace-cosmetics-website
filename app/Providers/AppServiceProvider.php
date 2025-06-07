<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use App\Models\Post;

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
        View::composer('*', function ($view) {
            $recentPosts = Post::orderBy('created_at', 'desc')->take(2)->get();
            $queryCount = Contact::count();
            $latestQueries = Contact::latest()->take(2)->get();
            $view->with([
                'recentPosts' => $recentPosts,
                'queryCount' => $queryCount,
                'latestQueries' => $latestQueries
            ]);
        });
    }
}
