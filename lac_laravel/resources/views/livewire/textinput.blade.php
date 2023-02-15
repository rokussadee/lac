<form wire:submit.prevent="save()" class="admin-form">
    <label for="datepicker">{{$field}}</label>
    <div style="display:flex;flex-direction: row;">
        <input style="font-size: 2.5rem; flex-basis: auto"
               type="text"
               wire:model.lazy="title"
               onsubmit="Livewire.emit('setInput', this.value)"
        >
        <button style="flex-basis: 70px;margin-left: 10px;" wire:click="save()">Save</button>
    </div>
    @if(session()->has('message'))
        <span>
            <small style="color: black;">
                {{session('message')}}
            </small>
        </span>
    @endif
    @error('title')
    <span>
            <small>
                {{ $message }}
            </small>
        </span>
    @enderror
</form>
