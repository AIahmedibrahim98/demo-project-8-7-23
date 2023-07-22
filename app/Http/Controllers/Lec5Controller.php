<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lec5Controller extends Controller
{
    public function page1()
    {

        return view('lec5.page1');
    }
    public function page2()
    {

        return view('lec5.page2');
    }
    public function page3()
    {
        $name = "ahmed123";

        return view('lec5.page3', ['name' => $name]);
    }
}
