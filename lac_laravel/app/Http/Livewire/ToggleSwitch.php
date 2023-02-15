<?php

namespace App\Http\Livewire;

use \Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToggleSwitch extends Component
{
    public Model $model;
    public string $field;
    public bool $isActive;

    public function mount()
    {
        $this->isActive = (bool)$this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.toggle-switch');
    }

    public function updating()
    {
        $this->model->setAttribute($this->field, !$this->isActive)->save();
    }
}
