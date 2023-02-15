<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Location extends Component
{
    public Model $model;
    public ?string $field;
    public ?string $location = null;


    public function mount()
    {
        $this->location = $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.location');
    }


    public function save()
    {
        $this->model->setAttribute($this->field, $this->location)->save();
        session()->flash('message', 'location successfully updated.');
    }
}
