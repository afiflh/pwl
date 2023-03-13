<?php

namespace App\Http\Controllers;

use App\Models\HobiLagi;
use Illuminate\Http\Request;

class HobiLagiController extends Controller
{
    function index(){
        return view('hobi', [
            'hobis' => HobiLagi::all()
        ]);
    }
}
