<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class LaravelAppServiceProvider extends ServiceProvider
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
        //kode u/ menggantikan kode $halaman = 'siswa'
    
        $halaman = '';
        if(Request::segment(1) == 'siswa'){
            $halaman = 'siswa';
        }
        if(Request::segment(1) == 'about'){
            $halaman = 'about';
        }
        if(Request::segment(1) == 'kelas'){
            $halaman = 'kelas';
        }
        if(Request::segment(1) == 'hobi'){
            $halaman = 'hobi';
        }
        if(Request::segment(1) == 'user'){
            $halaman = 'user';
        }
        if(Request::segment(1) == 'kamar'){
            $halaman = 'kamar';
        }
        view()->share('halaman', $halaman);
    }
}
