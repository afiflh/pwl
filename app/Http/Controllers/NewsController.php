<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index($news){
        echo "<h2>Berita Di Balik Layar Pemotretan $news Yang Santai</h2><br>";
        echo "Pelantikan presiden dan wakil presiden berlangsung 20 Oktober 2019. 
            Salah satu persiapan Jokowi dan KH Ma'ruf Amin adalah sesi foto pimpinan negara.";
    }
}
