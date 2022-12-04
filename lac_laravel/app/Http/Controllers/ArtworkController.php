<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use Illuminate\Support\Facades\DB;

class ArtworkController extends Controller
{
//    public function getIndex($category)
//    {
//        switch ($category) {
//            case('gallery'):
//                $content = GalleryItem::class::all();
//        }
//        return view('content.artwork', ['category' => $category, 'content' => $content]);
//    }

    public function getGallery()
    {
        $content = GalleryItem::class::all();
        return view('content.artwork', ['artwork' => 'gallery', 'content' => $content]);
    }

    public function getGazettes()
    {
        $content = GalleryItem::class::all();
        return view('content.artwork', ['artwork' => 'gazettes', 'content' => $content]);
    }

    public function getObjects()
    {
        $content = GalleryItem::class::all();
        return view('content.artwork', ['artwork' => 'objects', 'content' => $content]);
    }

    public function getAlbums()
    {
        $content = GalleryItem::class::all();
        return view('content.artwork', ['artwork' => 'albums', 'content' => $content]);
    }
}
