<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowPessoalDataController extends Controller
{
    public function show($name, $lastname, $RM, $gender, $address){
        return view('showPessoalData', ['name' => $name, 'lastname' => $lastname, 'RM' => $RM, 'gender' => $gender, 'address' => $address]);
    }
}
