<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // for mysql error solution
        Schema::defaultStringLength(191);

        // access this data in every page
        $socialLink = Post::where('post_type', 'socialLink')->first();
        $socialLink = json_decode($socialLink->post_content);
        view()->share('facebook', $socialLink->facebook);
        view()->share('twitter', $socialLink->twitter);
        view()->share('instagram', $socialLink->instagram);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
