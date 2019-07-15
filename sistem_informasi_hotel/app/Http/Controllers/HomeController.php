<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Log;
//use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Log::instance()->log(empty(Auth::user()->id) ? null : Auth::user(), 'on dashboard');
        return view('back-end.index');
    }
    public function logout()
    {
       Auth::logout();
    }
    public function showChangePasswordForm(){
        return view('auth.passwords.reset');
    }
}
