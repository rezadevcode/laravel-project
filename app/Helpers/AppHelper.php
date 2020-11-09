<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;

class AppHelper
{

    public static function auth($param = '')
    {
        $cookie = Crypt::decrypt(Cookie::get(config('custom.cookie'))); 
        $results = '';
        if (!empty($cookie)){
            $decode = json_decode($cookie);
            $cache = Cache::get(config('custom.cookie') . $decode->user_id);
            if ($cache) {
                $key_exists = array_key_exists($param, $cache);
                if ($key_exists) {
                    $results = $cache[$param];
                } else {
                    $results = '';
                }
            }
        }
        return $results;
    }

    public static function mem_cache()
    {   
        
        $decode = Crypt::decrypt(Cookie::get(config('custom.cookie')));        
        if (!empty($decode)) {
            $decode = json_decode($decode);
            // Cache::forget(config('custom.cookie') . $decode->user_id);
            return Cache::get(config('custom.cookie') . $decode->user_id);
        } else {
            return null;
        }
    }
}
