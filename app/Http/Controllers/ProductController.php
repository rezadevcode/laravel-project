<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AppHelper;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
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

    public function index()
    {
        $data['result'] = $this->session;
        return view('home',$data);
    }

    public function lists()
    {
        $data['result'] = $this->session;
        return view('product/lists',$data);
    }

    public function category()
    {
        $data['result'] = $this->session;
        return view('product/category',$data);
    }
}
