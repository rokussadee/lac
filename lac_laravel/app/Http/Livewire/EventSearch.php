<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Event;

class EventSearch extends Component
{
    public $searchTerm = '';
    public $years = [];
    public bool $sort = true;
    public $year;
    public int $lastYear;
    public $events;
    public $filteredEvents = [];
    public int $cumsum = 0;

    protected $queryString = [
        'searchTerm' => ['except' => ''],
        'year'
    ];

    public function render()
    {
        if ($this->searchTerm == '') {
            $this->fillFilteredEvents();
        } else {
            $this->events = Event::class::where('title', 'like', '%' . $this->searchTerm . '%')->where('isActive', '=', true)->get();
        }
        return view('livewire.event-search');
    }

    public function mount(Request $request)
    {
        $this->resetFilter();
        $this->lastYear = Event::class::orderBy('date', 'desc')->first()->date->format('Y');
        if ($request->query('year') !== null) {
            $this->year = $request->query('year');
        } else {
            $this->year = $this->lastYear;
        }
    }

    public function resetFilter()
    {
        if ($this->sort == true) {
            $this->filteredEvents = [];
            for ($str = 'a'; $str <= 'z'; $str++) {
                if ($str == 'aa') {
                    break;
                }
                $this->filteredEvents[$str] = [];
            }

            $this->filteredEvents['#'] = [];
        } elseif ($this->sort == false) {
            $this->filteredEvents = [];
            for ($month = Carbon::JANUARY; $month <= Carbon::DECEMBER; $month++) {
                $this->filteredEvents[Carbon::createFromFormat('m', $month)->format('M')] = [];
            }
        }
    }

    public function setYear($i)
    {
        $this->resetFilter();
        $this->year = $i;
    }

    public function toggleOrder()
    {
        $this->sort = !$this->sort;
        $this->resetFilter();
    }

    public function fillFilteredEvents()
    {
        $this->cumsum = 0;
        $this->events = Event::class::whereYear('date', $this->year)->where('isActive', '=', true)->get();
        if ($this->sort == true) {
            foreach ($this->events as $event) {
                if (intval(substr($event->slug, 0, 1))) {
                    array_push($this->filteredEvents['#'], $event);
                } else {
                    array_push($this->filteredEvents[substr($event->slug, 0, 1)], $event);
                }
                $this->cumsum += 1;
            }
        } elseif ($this->sort == false) {
            foreach ($this->events as $event) {
                array_push($this->filteredEvents[$event->date->format('M')], $event);
                $this->cumsum += 1;
            }
        }
    }
}
