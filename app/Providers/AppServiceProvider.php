<?php

namespace App\Providers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
        // Gate::define('update-review', function(User $user, Review $review){
        //     return $user->id === $review->user_id
        //         ?Response::allow()
        //         :Response::deny('You do not own this review');
        // });

        // Gate::define('delete-review', function(User $user,Review $review){
        //     return $user->id === $review->user_id
        //         ?Response::allow()
        //         :Response::deny('You do not own this review');
        // });
        Gate::define('admin',fn(User $user)=> Auth::user()->usertype == 'admin');
    }
}
