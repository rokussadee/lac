<?php

namespace App\Http\Livewire;

use App\Http\Controllers\EventController;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class DeleteButton extends Component
{
    public Model $model;

    public function render()
    {
        return view('livewire.delete-button');
    }

    public function deleteModel()
    {
        EventController::class('destroy', ['id' => $this->model->id]);
    }
}
