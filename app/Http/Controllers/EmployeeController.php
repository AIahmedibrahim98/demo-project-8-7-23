<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->get();
        // return view('show_employees')->with(['employees' => $employees]);
        // return view('show_employees')->with(compact('employees'));
        return view('show_employees', compact('employees'));
    }


    public function store()
    {
    }
}
