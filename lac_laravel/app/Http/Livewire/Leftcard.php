<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Leftcard extends Component
{
    public Model $model;
    public ?string $doors = null;
    public ?string $location = null;
    public ?string $tickets = null;

    protected $rules = [
        'location' => 'nullable|string',
        'doors' => 'nullable|date_format:H:i',
        'tickets' => ['nullable', 'regex:[^(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})$]'],
    ];

    public $messages = [
        'tickets.regex' => 'The ticket link you submitted was not a valid url.'
    ];


    public function mount()
    {
        $this->location = $this->model->getAttribute('location');
        $this->doors = $this->model->getAttribute('doors');
        $this->tickets = $this->model->getAttribute('tickets');
    }

    public function render()
    {
        return view('livewire.leftcard');
    }


    public function save()
    {
//        dd($this->date);
        $this->validate();
        $this->model->setAttribute('location', $this->location)->save();
        $this->model->setAttribute('doors', $this->doors)->save();
        $this->model->setAttribute('tickets', $this->tickets)->save();
        session()->flash('message', 'event information successfully updated.');
    }
}
