<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('path.public', function() {
        //     return realpath(base_path().'/../public_html');
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        if (App::environment('production')) {
            URL::forceScheme('https');
        } elseif(App::environment('local')){
            URL::forceScheme('http');
        }

        $data = Pengaturan::first();
        view::share('pengaturan', $data);

    }
}
