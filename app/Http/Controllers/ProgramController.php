<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    function index($program){
        echo "<b>Adapun tarif jenis paket $program, antara lain: </b><br>";
        echo "1. Paket Foto (5 foto) = 10k <br>";
        echo "2. Paket Foto (5 foto) + Video = 50k <br>";
        echo "3. Paket Foto (5 foto + edit) + Video = 100k.";
    }
}
