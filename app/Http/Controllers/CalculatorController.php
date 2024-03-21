<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function show(string $name = null, string $lastname = null){
        return view('calculator');
    }
}
