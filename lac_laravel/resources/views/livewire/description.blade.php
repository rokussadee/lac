<form wire:submit.prevent="save()" class="admin-form">

    <label for="datepicker">{{str_replace('_', ' ', $field)}}</label>

    <div
        x-data="scrolllock"
        style="display:flex;flex-direction: row; margin-bottom: 15px">
        <textarea
            style="max-height: 80vh;"
            {{--            type="text"--}}
            id="description"
            x-ref="textfield"
            {{--            wire:key="{{rand()}}"--}}
            x-data="
            {
                resize: () => {
                    $el.style.minHeight = '5px';
                    $el.style.height = '100%';
                    $el.style.height = $el.scrollHeight + 'px';
                }
            }"
            x-init="resize()"
            x-on:input.prevent="resize()"
            {{--            @click.away="focusOut()"--}}
            {{--            wire:click.stop--}}
            {{--            wire:input.prevent--}}
            wire:model.lazy="description"
            wire:ignore
{{--            onsubmit="Livewire.emit('setDescription', this.value)"--}}
        >
        </textarea>
        <button style="flex-basis: 70px;margin-left: 10px;" wire:click="save()">Save</button>
    </div>

    @if(session()->has('message'))
        <span>
            <small style="color: black;">
                {{session('message')}}
            </small>
        </span>
    @endif
    @error('description')
    <span>
            <small>
                {{ $message }}
            </small>
        </span>
    @enderror
</form>
