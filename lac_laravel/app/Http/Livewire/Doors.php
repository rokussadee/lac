<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Doors extends Component
{
    public Model $model;
    public ?string $field;
    public ?string $doors = null;
    
    public function mount()
    {
        $this->doors = $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.doors');
    }


    public function save()
    {
        $this->model->setAttribute($this->field, $this->doors)->save();
        session()->flash('message', 'doors successfully updated.');
    }
}
