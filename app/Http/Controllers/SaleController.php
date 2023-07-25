<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = [
            'Ahmed' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
            'Sara' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
            'Maha' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
            'Engy' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
        ];
        // return view('sales', ['sales' => $sales]);
        return view('sales', compact('sales'));
    }
    public function index_v2()
    {
        $sales = [
            'Ahmed' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
            'Sara' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
            'Maha' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
            'Engy' => ["Jun" => 2000, "Feb" => 5000, "March" => 12000],
        ];
        $x = 10;
        $y = 11;
        // dd($sales);
        // dump()
        return view('sales_v2')
            // ->with(['x' => $sales]);
            ->with(compact('sales', 'x', 'y'));
    }
}
