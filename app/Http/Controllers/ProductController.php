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
        
    }

    public function index()
    {
        return view('home');
    }

    public function lists()
    {
        return view('product/lists');
    }

    public function category()
    {
        return view('product/category');
    }
}
