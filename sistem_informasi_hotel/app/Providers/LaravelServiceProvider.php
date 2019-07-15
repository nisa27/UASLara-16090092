<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
class LaravelServiceProvider extends ServiceProvider
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
        //kode u/ menggantikan kode $halaman = 'about'
     
        $halaman = '';
        if(Request::segment(1) == '/'){
            $halaman = '/';
        }
        if(Request::segment(1) == 'about'){
            $halaman = 'about';
        }
        if(Request::segment(1) == 'rooms'){
            $halaman = 'rooms';
        }
        if(Request::segment(1) == 'fiture'){
            $halaman = 'fiture';
        }
        if(Request::segment(1) == 'contact'){
            $halaman = 'contact';
        }
        if(Request::segment(1) == 'kamar'){
            $halaman = 'kamar';
        }
        view()->share('halaman', $halaman);
    }
}
