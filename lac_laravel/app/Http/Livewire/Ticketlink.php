<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Ticketlink extends Component
{
    public Model $model;
    public ?string $field;
    public ?string $tickets = null;

    protected $rules = [
        'tickets' => ['nullable', 'regex:[^(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})$]'],
    ];

    public $messages = [
        'tickets.regex' => 'The ticket link you submitted was not a valid url.'
    ];


    public function mount()
    {
        $this->tickets = $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.ticketlink');
    }


    public function save()
    {
        $this->validate();
        $this->model->setAttribute($this->field, $this->tickets)->save();
        session()->flash('message', 'ticket link information successfully updated.');
    }
}
