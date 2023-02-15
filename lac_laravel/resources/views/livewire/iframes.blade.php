<form
    style="padding-top: 10px"
    wire:submit.prevent="save()"
    class="admin-form">
    <div class="admin-form" action="">
        <label for="">links</label>
        @if($links > 0)
            <table style="margin-top: 5px" class="dynamic-field">

                <tbody>
                @foreach($links as $iframe)
                    <tr>
                        <td>
                            {!! $iframe !!}
                        </td>
                        <td
                            style="display: flex; height: 42px;">
                            <button style="margin-top: 0"
                                    wire:click.prevent="deleteLink({{$loop->index}})">&times;
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div
        class="admin-form">
        <div>
            <table class="dynamic-field">
                <tbody>
                <tr>
                    <td><input type="text" class="form-control"
                               onchange="Livewire.emit('setNewLink', this.value)"
                        ></td>
                    <td>
                        <button
                            type="submit"
                        >add
                        </button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        @if(session()->has('message'))
            <span>
            <small style="color: black;">
                {{session('message')}}
            </small>
        </span>
        @endif
        @error('links.*')
        <span>
            <small>
                {{ $message }}
            </small>
        </span>
        @enderror
    </div>
    <div
        class="admin-form">
        <button
            wire:click="save()"
            type="submit">save
        </button>
    </div>
</form>
