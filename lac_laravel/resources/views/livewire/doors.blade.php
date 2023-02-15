<form wire:submit.prevent="save()" class="admin-form"
      style="box-sizing: border-box; padding: 10px; width: 100%; margin-bottom: 15px">
    <label>doors</label>
    <div
        x-data="scrolllock"
        style="display:flex;flex-direction: row;">
        <input wire:model.lazy="doors" type="time" placeholder="00:00" style="margin-bottom: 0">
        <button style="flex-basis: 70px;margin-left: 10px;" wire:click="save()">Save</button>
    </div>
    @if(session()->has('message'))
        <span>
            <small style="color: black;">
                {{session('message')}}
            </small>
        </span>
    @endif
</form>
