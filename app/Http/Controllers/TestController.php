<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function test2()
    {
        return view('test');
    }

    public function test3($name, $age = 1)
    {
        return "Hello $name .. your age is $age";
    }
}
