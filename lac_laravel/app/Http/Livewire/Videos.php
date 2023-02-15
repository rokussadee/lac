<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Videos extends Component
{
    protected $listeners = ["setNewPath"];
    public Model $model;
    public $videos = [];
    public $newPath = '';
    public ?string $field;

    protected $rules = [
        'newPath' => ['nullable', 'regex:[^(?:https?:\/\/)?(?:m\.|www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$]'],
    ];

    public $messages = [
        'newPath' => 'The submitted video was not a valid YouTube link.'
    ];

    public function mount()
    {
        $this->videos = json_decode($this->model->getAttribute($this->field));
    }

    public function render()
    {
        return view('livewire.videos');
    }

    public function save()
    {
        $this->validate();
        $this->model->setAttribute($this->field, json_encode($this->videos))->save();
        session()->flash('message', 'videos successfully updated.');
    }

    public function setNewPath($videopath)
    {
        $this->newPath = $videopath;
        try {
            parse_str(parse_url($videopath, PHP_URL_QUERY), $vars);
            array_push($this->videos, $vars['v']);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deletePath($index)
    {
        array_splice($this->videos, $index, 1);
        $this->model->setAttribute($this->field, json_encode($this->videos))->save();
        session()->flash('message', 'video successfully removed.');
    }

}
