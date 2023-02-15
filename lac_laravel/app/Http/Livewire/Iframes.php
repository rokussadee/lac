<?php

namespace App\Http\Livewire;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Iframes extends Component
{
    protected $listeners = ["setNewLink"];
    public Model $model;
    public $links = [];
    public ?string $field;

    protected $rules = [
        'links.*' => ['nullable', 'regex:[^(?:<iframe[^>]*)(?:(?:\/>)|(?:>.*?<\/iframe>))$]'],
    ];

    public $messages = [
        'links.*.regex' => 'One or more of the submitted links was not a valid bandcamp iframe.',
    ];

    public function mount()
    {
        $this->links = json_decode($this->model->getAttribute($this->field));
    }

    public function render()
    {
        return view('livewire.iframes');
    }

    public function save()
    {
        $this->validate();
        $this->model->setAttribute($this->field, json_encode($this->links))->save();
        session()->flash('message', 'links successfully updated.');
    }

    public function setNewLink($link)
    {
        try {
            array_push($this->links, $link);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteLink($index)
    {
        array_splice($this->links, $index, 1);
        $this->model->setAttribute($this->field, json_encode($this->links))->save();
        session()->flash('message', 'link successfully removed.');
    }

}
