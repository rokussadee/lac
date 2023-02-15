<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class DateTocomponent extends Component
{
    protected $listeners = ['setDate'];
    public Model $model;
    public ?string $date = null;
    public ?string $field;

    protected $rules = [
        'date' => 'nullable|date_format:Y-m-d',
    ];

    public $messages = [
        'date.date_format' => "The submitted date wasn't of the right format (yyyy-mm-dd). example: 2024-05-31",
    ];


    public function mount()
    {
        if ($this->model->getAttribute($this->field) != null) {
            $this->date = $this->model->getAttribute($this->field)->format('Y-m-d');
        } else {
            $this->date = null;
        }
    }

    public function render()
    {
        return view('livewire.date-tocomponent');
    }

    public function setDate($data)
    {
        if ($data == '') {
            $this->date = null;
        } else {
            $this->date = $data;
        }
        $this->save();
    }

    public function setNull()
    {
        $this->date = null;
        $this->save();
    }

    public function save()
    {
//        dd($this->date);
        if ($this->date == '') {
            $this->date = null;
        }
        $this->validate();
        $this->model->setAttribute($this->field, $this->date)->save();
        session()->flash('message', 'date successfully updated.');
    }
}
