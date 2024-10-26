<?php

namespace App\Http\Controllers\Hallo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalloController extends Controller
{
    public function index(){
        return view('coba.halo2');
    }
}
