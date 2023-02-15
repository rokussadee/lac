<?php

namespace App\Http\Livewire;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Textinput extends Component
{
    protected $listeners = ['setInput'];
    public Model $model;
    public string $title;
    public ?string $field;
    public ?string $table;


    public function rules()
    {
        return [
            'title' => [
                'required',
                'string',
                'max:255',
                Rule::unique($this->table)->ignore($this->model->id)]
        ];
    }

    public $messages = [
        'title.required' => 'A title is required for the creation of an event.',
        'title.unique' => 'An event with this title already exists. Please choose a unique title.',
        'title.max' => 'The title you submitted is too long, a maximum of 50 characters is allowed.'
    ];

    public function mount()
    {
        $this->title = $this->model->getAttribute($this->field);
        $this->table = strtolower(class_basename($this->model) . 's');
    }

    public function render()
    {
        return view('livewire.textinput');
    }

    public function setInput($data)
    {
        $this->title = $data;
    }

    public function save()
    {
        $this->validate();
        $this->model->setAttribute($this->field, $this->title)->save();
        session()->flash('message', 'title successfully updated.');

    }
}
