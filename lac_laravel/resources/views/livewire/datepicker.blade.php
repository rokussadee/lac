<form wire:submit.prevent="save()" class="admin-form">
    <div id="{{$field}}" style="display:flex; flex-direction: row; justify-content: space-between">
        <div
            style="flex-basis: auto;width: 100%;">
            <div style="display:flex; justify-content: space-between">
                <p for="datepicker">{{str_replace('_', ' ', $field)}}</p>

            </div>
            <input
                style="font-size: 1rem;width: 100%;"
                name="datepicker"
                type="date"
                wire:model.lazy="date"
            >
        </div>
        <button
            class="datepickerbutton" style="flex-basis: 70px; margin-left: 10px;" value="Save"
            wire:click="save()">Save
        </button>
    </div>
    @if(session()->has('message'))
        <span>
            <small style="color: black;">
                {{session('message')}}
            </small>
        </span>
    @endif
    @error('date')
    <span>
            <small>
                {{ $message }}
            </small>
        </span>
    @enderror
</form>
