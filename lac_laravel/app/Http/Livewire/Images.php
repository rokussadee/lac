<?php

namespace App\Http\Livewire;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Images extends Component
{
    use WithFileUploads;

    public Model $model;
    public $images = [];
    public $imagePaths = [];
    public string $alt = 'image';
    public ?string $field;

    protected $rules = [
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,svg',
    ];

    public $messages = [
        'images.*.image' => 'One or more of the submitted files was not an image.',
        'images.*.mimes' => 'One or more of the submitted images were of the wrong filetype. accepted filetypes: .jpeg, .jpg, .png, .svg'
    ];

    public function mount()
    {
        $this->images = json_decode($this->model->getAttribute($this->field));
        $this->imagePaths = json_decode($this->model->getAttribute($this->field));
        $this->alt = $this->model->getAttribute('title');
    }

    public function render()
    {
        return view('livewire.images');
    }

    public function save()
    {
        $this->validate();
        foreach ($this->images as $image) {
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '.jpg';

            $img = Image::make($image->getRealPath());
            $thumb = Image::make($image->getRealPath());

            $imagePath = public_path('/storage/images');
            $imageSize = 700;
            $thumbPath = public_path('/storage/thumbnails');
            $thumbSize = 150;
            Helper::saveImage($img, $imagePath, $imagename, $imageSize);
            Helper::saveImage($thumb, $thumbPath, $imagename, $thumbSize);
//            $this->images = array_replace($this->images, [$key => $imagename]);
            array_push($this->imagePaths, $imagename);
        }
        $this->images = $this->imagePaths;
        $this->model->setAttribute($this->field, json_encode($this->imagePaths))->save();
        session()->flash('message', 'date successfully updated.');
    }

    public function deletePhoto($index)
    {
        array_splice($this->images, $index, 1);
        array_splice($this->imagePaths, $index, 1);
        $this->model->setAttribute($this->field, json_encode($this->imagePaths))->save();
        session()->flash('message', 'date successfully updated.');
    }
}
