<div>
    <label for="title">Add an artist</label>
    <br>
    <div style="display:flex;">
        @foreach($chosenArtists as $artist)
            <div style="flex-basis: 20%; display:flex;">
                <input type="text" name="artists[]" readonly value="{{$artist['title']}}">
                <button type="button" style="flex-basis: 20%;">x</button>
            </div>
        @endforeach
        <input type="text" wire:model="searchTerm">
    </div>
    @if($searchTerm && $searchTerm != '')
        <div class="archive-letter">
            <ul>
                @foreach($searchedArtists as $artist)
                    <li><a wire:click="addArtist({{$artist}})">
                            {{$artist->title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
