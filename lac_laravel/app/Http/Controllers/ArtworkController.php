<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\GalleryItem;
use App\Models\GazetteItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller
{

    public function getGallery()
    {
        $content = GalleryItem::class::all();
        return view('content.artwork', ['artwork' => 'gallery', 'content' => $content]);
    }

    public function getGazettes()
    {
        $collection = GazetteItem::class::all();

        $content = collect($collection)->sortByDesc(function ($obj) {
            return Carbon::parse($obj['publication_date'])->getTimestamp();
        });
        return view('content.artwork', ['artwork' => 'gazettes', 'content' => $content]);
    }

    public function getObjects()
    {
//        $content = GalleryItem::class::all();
        return view('content.artwork'
            , ['artwork' => 'objects']
        );
    }

    public function getAlbums()
    {
        $collection = Album::class::all();

        $content = collect($collection)->sortByDesc(function ($obj) {
            return Carbon::parse($obj['release_date'])->getTimestamp();
        });
        return view('content.artwork', ['artwork' => 'albums', 'content' => $content]);
    }
}
