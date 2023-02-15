<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use Livewire\Component;
use function Symfony\Component\String\s;

class ArtistAdd extends Component
{
    public $searchTerm = '';
    public $searchedArtists = [];
    public $chosenArtists = [];

    public function render()
    {
        $this->searchedArtists = Artist::class::where('title', 'like', '%' . $this->searchTerm . '%')->get();
        return view('livewire.artist-add');
    }

    public function addArtist($artist)
    {
        array_push($this->chosenArtists, $artist);
    }
}
