<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\student;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $update = student::all();
        view()->share('allstudents' ,$update );
    }
}
