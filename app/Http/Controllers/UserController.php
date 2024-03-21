<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DateTimeZone;
use DateTime;

class UserController extends Controller
{
    private function getHour(){
        $timezone = new DateTimeZone('America/Sao_Paulo');
        $now = new DateTime('now', $timezone);
        $hour = $now->format('H');

        return $hour;
    }

    public function show(string $name = null, string $lastname = null){
        $hour = $this->getHour();

        return view('index', ['name'=>$name, 'lastname' => $lastname, 'hour'=>$hour]);
    }
}
