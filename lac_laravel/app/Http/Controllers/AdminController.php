<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\EventRequest;
use App\Http\Requests\ResidenceRequest;
use App\Models\Artist;
use App\Models\Event;
use App\Models\Residence;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function getEvents()
    {
        $events = Event::class::orderBy('isActive', 'asc')->get();
        return view('admin.dashboard', ['crud_section' => 'events', 'content' => $events]);
    }

    public function getResidencies()
    {
        $residencies = Residence::class::orderBy('isActive', 'asc')->get();
        return view('admin.dashboard', ['crud_section' => 'residencies', 'content' => $residencies]);
    }

    public function getUsers()
    {
        if (Auth::user()->hasRole('Super Admin')) {
            $users = User::class::all();
            return view('admin.dashboard', ['crud_section' => 'users', 'content' => $users]);
        } else return Redirect::back();
    }

    public function postEvent(EventRequest $request)
    {
        $images_array = [];
        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                array_push($images_array, pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.jpg');
            }
        }

        $event = Event::class::create([
            'title' => $request->input('title'),
            'slug' => Helper::createSlug('App\Models\Event', $request->input('title')),
            'date' => $request->input('date'),
            'date_to' => $request->input('date_to'),
            'description' => $request->input('description'),
            'images' => json_encode($images_array),
            'location' => $request->input('location'),
            'doors' => $request->input('doors'),
            'tickets' => $request->input('tickets'),
            'additional_category' => $request->input('additional_category'),
            'additional_description' => $request->input('additional_description'),
        ]);

        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.jpg';

//            dd($image->getRealPath());
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
        $artist_ids = [];
        if ($request->has('artists')) {
            foreach ($request['artists'] as $artistname) {
                $artistid = Artist::class::where('title', '=', $artistname)->pluck('id')[0];
                array_push($artist_ids, $artistid);
            }
//            dd($event);
            $event->artists()->attach(array_values($artist_ids));
        }

        return redirect()->route('admin.events.edit-event', array(Str::slug($request->input('title'))));
    }

    public function postResidency(ResidenceRequest $request)
    {
        $images_array = [];
        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                array_push($images_array, pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.jpg');
            }
        }

        $links_array = [];
        if ($request->input('links')) {
            if (count($request->input('links')) > 0 && $request->input('links')[0] != null) {
                foreach ($request->input('links') as $link) {
                    try {
                        array_push($links_array, $link);
                    } catch (\Exception $e) {
                        return $e->getMessage();
                    }
                }
            }
        }

        $videos_array = [];
        if ($request->input('videos')) {
            if (count($request->input('videos')) > 0 && $request->input('videos')[0] != null) {
                foreach ($request->input('videos') as $videopath) {
                    try {
                        parse_str(parse_url($videopath, PHP_URL_QUERY), $vars);
                        array_push($videos_array, $vars['v']);
                    } catch (\Exception $e) {
                        return $e->getMessage();
                    }
                }
            }
        }

        $event = Residence::class::create([
            'title' => $request->input('title'),
            'slug' => Helper::createSlug('App\Models\Residence', $request->input('title')),
            'date' => $request->input('date'),
            'date_to' => $request->input('date_to'),
            'description' => $request->input('description'),
            'images' => json_encode($images_array),
            'location' => $request->input('location'),
            'links' => json_encode($links_array),
            'videos' => json_encode($videos_array)
        ]);

        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.jpg';

//            dd($image->getRealPath());
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
