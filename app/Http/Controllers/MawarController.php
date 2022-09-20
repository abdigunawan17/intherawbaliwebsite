<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MawarController extends Controller
{
    public function index()
    {
        return view('mawar');
    }
}
