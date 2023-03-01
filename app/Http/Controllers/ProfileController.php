<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        return view('profile',
                    ['nama' => 'Afif Lukmanul Hakim',
                     'nim' => '2141720262',
                     'kelas' => 'TI-2A',
                     'absen' => '02']);
    }
}
