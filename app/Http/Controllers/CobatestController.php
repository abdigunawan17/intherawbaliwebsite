<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobatestController extends Controller
{
    public function index() {
        return view('cobatest');
    }
}
