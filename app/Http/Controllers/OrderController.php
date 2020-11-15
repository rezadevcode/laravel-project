<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AppHelper;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function cart()
    {
        $data['css'] = 'order/style.css';
        $data['js'] = 'order/script.js';
        return view('order/cart',$data);
    }

    public function checkout()
    {
        $data['css'] = 'order/checkout/style.css';
        $data['js'] = 'order/checkout/script.js';
        return view('order/checkout',$data);
    }

    public function tracking()
    {
        $data['css'] = 'order/tracking/style.css';
        $data['js'] = 'order/tracking/script.js';
        return view('order/tracking',$data);
    }
    public function done()
    {
        $data['css'] = 'order/done/style.css';
        return view('order/done',$data);
    }
    public function cancel()
    {
        $data['css'] = 'order/cancel/style.css';
        return view('order/cancel',$data);
    }
}
