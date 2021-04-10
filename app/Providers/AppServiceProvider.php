<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $nguoidung=DB::table('users')->get();
        View::share('nguoidung',$nguoidung);







        // if(Auth::check())
        //  {
        //     //view()->share('nguoidung',Auth::user());
        //     View::share('nguoidung', Auth::user());
        //  }



    }
}
