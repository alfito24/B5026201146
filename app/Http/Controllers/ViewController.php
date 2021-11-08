<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showPraktikum2(){
        return view('prak2web');
    }
    public function showETS(){
        return view('ets');
    }
    public function tugasphp(Request $request){
        return view('week9.php');
    }
    public function showForm(){
        return view('week9.html');
    }
}
