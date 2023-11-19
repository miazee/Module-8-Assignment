<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = 75;
        $data = [
            'name' => $name,
            'age' => $age,
            'id' => $id
        ];

        // Cookie Variable
        $key_name = 'access_token';
        $value = '123-XYZ';
        $timeoutInMinute = 1;
        $path = '/';
        $domain = request()->getHost();
        $secure = false;
        $httpOnly = true;

        return response($data, 200)->cookie($key_name, $value, $timeoutInMinute, $path, $domain, $secure, $httpOnly);
    }
}
