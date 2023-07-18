<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test2()
    {
        return view('test');
    }

    // public function test3($name, $age = 1)
    // {
    //     return "Hello $name .. your age is $age";
    // }

    public function test3(Request $request)
    {
        $name = $request->name;
        $age = $request->age;
        $title = $request->title;
        return "Hello $name .. your age is $age and my title is $title ";
    }
}
