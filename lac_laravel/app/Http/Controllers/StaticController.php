<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function getAbout()
    {
        $lacimages = "[\"65.jpeg\",\"zaal.jpeg\",\"20221103_092411.jpg\"]";
        $roskotimages = "[\"L1088969.jpg\",\"L1088981.jpg\",\"L1088995.jpg\"]";
        return view('content.info', ['lacimages' => $lacimages, 'roskotimages' => $roskotimages]);
    }
}
