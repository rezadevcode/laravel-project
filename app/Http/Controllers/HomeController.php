<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AppHelper;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->session = AppHelper::mem_cache();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['result'] = $this->session;
        return view('home',$data);
    }

    public function signout()
    {
        Cache::forget(config('custom.cookie') . $this->session['user_id']);
        Cookie::forget(config('custom.cookie'));
        return redirect('/login');
    }
}
