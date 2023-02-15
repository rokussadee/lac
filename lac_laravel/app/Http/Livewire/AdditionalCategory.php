<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class AdditionalCategory extends Component
{
    protected $listeners = ['setCategory'];
    public Model $model;
    public ?string $category;
    public ?string $field;

    public function mount()
    {
        $this->category = $this->model->getAttribute($this->field);

    }

    public function render()
    {
        return view('livewire.additional-category');
    }

    public function setCategory($data)
    {
        $this->category = $data;
    }

    public function save()
    {
        $this->model->setAttribute($this->field, $this->category)->save();
        session()->flash('message', 'event category updated');
    }
}
