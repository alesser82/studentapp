<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class StudentAppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //create current page
        $page = '';
        if (Request::segment(1) == 'student') {
            $page = 'student';
        }

        if (Request::segment(1) == 'about') {
            $page = 'about';
        }

        if (Request::segment(1) == '') {
            $page = 'homepage';
        }

        //share status page
        view()->share('page',$page);
    }
}
