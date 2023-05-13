<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
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
        if(!App::runningInConsole()){
            View::share('list_categories', Category::orderBy('created_at', 'desc')->get());
            View::share('list_books', Book::orderBy('created_at', 'desc')->limit(20)->get());
        }
    }
}
