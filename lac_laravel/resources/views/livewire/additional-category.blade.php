<form wire:change="save()" class="admin-form" style="padding: 10px 0px">
    <div>

        <label for="additional_category">event category</label>
        <br>
        <select
            style="margin-bottom: 15px; padding: 15px"
            onchange="Livewire.emit('setCategory', this.value);"
            wire:model="category">
            <option value="concert" wire:key="{{rand()}}">Concert (default)
            </option>
            <option value="exposition" wire:key="{{rand()}}">Exposition
            </option>
            <option value="collaboration" wire:key="{{rand()}}">Collaboration
            </option>
        </select>
    </div>
    @if(session()->has('message'))
        <span>
            <small style="color: black;">
                {{session('message')}}
            </small>
        </span>
    @endif
</form>
