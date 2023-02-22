<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
        function index($name){
            echo "Daftar jasa $name yang kami sediakan: <br>";
            echo "1. Fotografi <br>";
            echo "2. Videografi <br>";
            echo "3. Editing Video.";
        }
}
