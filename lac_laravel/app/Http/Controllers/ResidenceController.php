<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Residence;
use Carbon\Carbon;

class ResidenceController extends Controller
{
    public function getRelevant()
    {
//        $currentresidencies = Residence::class::select('*')->where('date', '<=', Carbon::now('Europe/Brussels'))->where('date_to', '>=', Carbon::now('Europe/Brussels'))->where('isActive', true)->get();
//        $upcoming = Residence::class::select('*')->where('date', '>=', Carbon::now('Europe/Brussels'))->where('date_to', '>=', Carbon::now('Europe/Brussels'))->where('isActive', true)->get();
//        $staticcontent = Content::class::where('page', '=', 'in residence')->get();
//        if (count($upcoming) == 0 && count($currentresidencies) == 0) {
//            $pastresidencies = Residence::class::orderBy('date_to', 'desc')->where('isActive', true)->take(5)->get();
//            return view('content.inresidence',
//                [
//                    'noupcoming' => true,
//                    'currentresidencies' => $currentresidencies,
//                    'upcoming' => $pastresidencies,
//                    'staticcontent' => $staticcontent,
//                ]
//            );
//        } else {
//            return view('content.inresidence',
//                [
//                    'currentresidencies' => $currentresidencies,
//                    'upcoming' => $upcoming,
//                    'staticcontent' => $staticcontent
//                ]
//            );
//        }
        $upcoming = Residence::class::select('*')->where('date', '>=', Carbon::now('Europe/Brussels'))->where('date_to', '>=', Carbon::now('Europe/Brussels'))->where('isActive', true)->orderBy('date', 'desc')->get();
        $currentresidencies = Residence::class::select('*')->where('date', '<=', Carbon::now('Europe/Brussels'))->where('date_to', '>=', Carbon::now('Europe/Brussels'))->where('isActive', true)->orderBy('date', 'desc')->get();
        $pastresidencies = Residence::class::select('*')->where('date', '<=', Carbon::now('Europe/Brussels'))->where('date_to', '<=', Carbon::now('Europe/Brussels'))->where('isActive', true)->orderBy('date', 'desc')->get();
        $staticcontent = Content::class::where('page', '=', 'in residence')->get();
        return view('content.inresidence',
            [
                'noupcoming' => true,
                'currentresidencies' => $currentresidencies,
                'upcoming' => $upcoming,
                'pastresidencies' => $pastresidencies,
                'staticcontent' => $staticcontent,
            ]
        );
    }

    public function editResidency($slug)
    {
        $residency = Residence::class::where('slug', '=', $slug)->first();
        return view('admin.editresidency', ['residency' => $residency]);
    }

    public function getResidencyArchive()
    {
        return view('content.archive', ['archive' => 'residencies']);

    }
}
