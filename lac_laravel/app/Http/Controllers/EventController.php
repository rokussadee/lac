<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;

class EventController extends Controller
{
    public function getIndex()
    {
        $events = Event::class::orderBy('date', 'asc')->where(function ($query) {
            $query->where('date', '>=', Carbon::today())->where('isActive', true);
        })->orWhere(function ($query) {
            $query->where('date_to', '>=', Carbon::now('Europe/Brussels'))->where('isActive', true);
        })->get();

        return view('content.programme', ['events' => $events]);
    }

    public function editEvent($slug)
    {
        $event = Event::class::where('slug', '=', $slug)->first();
        return view('admin.editevent', ['event' => $event]);
    }

    public function getEventArchive()
    {
        return view('content.archive', ['archive' => 'events']);

    }

    /**
     * soft delete post
     *
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Event::find($id)->delete();

        return redirect()->back();
    }

    /**
     * restore specific post
     *
     * @return RedirectResponse
     */
    public function restore($id)
    {
        Event::onlyTrashed()->find($id)->restore();

        return redirect()->back();
    }
}
