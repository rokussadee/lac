<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Description extends Component
{
    protected $listeners = ['setDescription'];
    public Model $model;
    public ?string $description = null;
    public ?string $field;

    public function mount()
    {
        $this->description = $this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.description');
    }

    public function setDescription($data)
    {
        $this->description = $data;
    }

    public function save()
    {
        $this->model->setAttribute($this->field, $this->description)->save();
        session()->flash('message', (str_replace('_', ' ', $this->field) . ' successfully updated.'));
    }
}
