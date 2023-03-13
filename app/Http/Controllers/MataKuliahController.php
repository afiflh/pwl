<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    function index(){
        return view('matkul', [
            'matkul' => MataKuliah::all()
        ]);
    }
}
