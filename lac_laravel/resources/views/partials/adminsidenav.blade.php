<div
    class="right card  border-top {{str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'admin.events') ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('admin/events/index')}}'"
        class="card-button"
    >
        @include('partials.card', ['title' => 'events'])
    </button>
</div>
<div
    class="right card  {{str_contains(\Illuminate\Support\Facades\Route::currentRouteName(), 'admin.residencies') ? 'activelink' : ''}}"
>
    <button
        onclick="location.href = '{{url('admin/residencies')}}'"
        class="card-button"
    >
        @include('partials.card', ['title' => 'residencies'])
    </button>
</div>
{{--<div--}}
{{--    class="right card {{\Illuminate\Support\Facades\Route::currentRouteName() == 'admin.artwork' ? 'activelink' : ''}}"--}}
{{-->--}}
{{--    <button--}}
{{--        onclick="location.href = '{{url('admin/artwork')}}'"--}}
{{--        class="card-button"--}}
{{--    >--}}
{{--        @include('partials.card', ['title' => 'artwork'])--}}
{{--    </button>--}}
{{--</div>--}}
@can('user_crud')
    <div
        class="right card {{\Illuminate\Support\Facades\Route::currentRouteName() == 'admin.users' ? 'activelink' : ''}}"

    >
        <button
            onclick="location.href = '{{url('admin/users')}}'"
            class="card-button"
        >
            @include('partials.card', ['title' => 'users'])
        </button>
    </div>
@endcan
