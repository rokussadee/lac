<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Residence;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    public function getRelevant()
    {
        $currentresidencies = Residence::class::select('*')->where('date', '<=', Carbon::now('Europe/Brussels'))->where('date_to', '>=', Carbon::now('Europe/Brussels'))->get();
        $upcoming = Residence::class::select('*')->where('date', '>=', Carbon::now('Europe/Brussels'))->where('date_to', '>=', Carbon::now('Europe/Brussels'))->get();
//        $currentresidencies = Residence::class::all();
        $staticcontent = Content::class::where('page', '=', 'in residence')->get();
        return view('content.inresidence', ['currentresidencies' => $currentresidencies,
            'upcoming' => $upcoming,
            'staticcontent' => $staticcontent]);
    }
}
