<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallLogsController extends Controller
{
    public function index(){
        return view('calllogs');
    }
}
