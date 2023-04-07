<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skincare;
use Illuminate\Support\Facades\DB;

class SkincareController extends Controller
{
    public function showDataSkincare()
    {
        $data['skincare'] = DB::table('skincare')->get();
        return view('skincare', $data);

    }
}
