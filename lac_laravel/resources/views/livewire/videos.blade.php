<form
    style="padding-top: 10px"
    wire:submit.prevent="save()"
    class="admin-form">
    <div class="admin-form" action="">
        <label for="">videos</label>
        @if($videos > 0)
            <table class="dynamic-field">

                <tbody>
                <div class="residence-videos">

                    @foreach($videos as $path)
                        <tr>
                            <td>
                                <div class="video-container">
                                    @include('partials.video-content', ['videopath' =>$path])
                                </div>
                            </td>
                            <td
                                style="display: flex; height: 42px;">
                                <button style="margin-top: 0"
                                        wire:click.prevent="deletePath({{$loop->index}})">&times;
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </div>
                </tbody>
            </table>
        @endif
    </div>
    <div
        class="admin-form">
        <div>
            <table style="margin-top: 5px" class="dynamic-field">
                <tbody>
                <tr>
                    <td><input type="text" class="form-control"
                               onchange="Livewire.emit('setNewPath', this.value)"
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
        @error('newPath')
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
