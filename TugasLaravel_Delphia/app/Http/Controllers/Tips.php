<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tips extends Controller
{
    public function index()
    {
        return view('tips');
    }
}
