<?php

namespace Zarboxa\Chatting;

use Illuminate\Support\ServiceProvider;

class ChattingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(){
        /*
        * Include the necessary routes
        */
        require __DIR__.'/routes/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(){
        // $this->app->make('Zarboxa\Chatting\App\Http\Controllers\ChattingController');
        $this->loadViewsFrom(__DIR__.'/views', 'chatting');
    }
}
