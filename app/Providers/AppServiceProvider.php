<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

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
        /*
        
        $db_book = DB::table('book')->select('*')->get();
        $users = DB::table('book')->paginate(10);
        $list_book=json_decode($db_book,true);
        view()->share('list_book', $list_book);
        */
    }
}
