<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Golchha21\ReSmushIt\Facades\Optimize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        Validator::make($request->all(), [
            'images.*' => 'image|mimes:jpeg,png,jpg,svg|size:10000',
        ]);

        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.jpg';

                $img = Image::make($image->getRealPath());
                $thumb = Image::make($image->getRealPath());

                $imagePath = public_path('/storage/images');
                $imageSize = 700;
                $thumbPath = public_path('/storage/thumbnails');
                $thumbSize = 150;

                Helper::saveImage($img, $imagePath, $imagename, $imageSize);
                Helper::saveImage($thumb, $thumbPath, $imagename, $thumbSize);
            }
        }

    }
}
