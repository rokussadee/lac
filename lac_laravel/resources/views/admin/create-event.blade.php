@extends('layouts.app', ['title' => 'create event'])

@section('content')
    <div class="artwork-grid">

        <div class="admin-side-nav">

            @include('partials.adminsidenav')
        </div>
        <div
            class="left card gallery-item-card desktopBorder sectioncontent "
            style="grid-area: 1/1/span 1/span 1; height:140px; border-right: none"
            {{--            style="grid-row: {{$loop->index}}"--}}
        >
            @include('partials.infocard', ['description' => '<a href="'.url()->previous().'"><h1><== back</h1></a>'])
        </div>
        <div class="admin-event">

            <div>

                <div class="event-item">
                    <section>
                        <h1>Create Event</h1>
                    </section>

                </div>
                <div class="event-item">

                    <section>
                        <form class="admin-form" action="{{route('admin.events.upload-event')}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            {{--                            @if($errors->any())--}}
                            {{--                                {!! implode('', $errors->all('<div>:message</div>')) !!}--}}
                            {{--                            @endif--}}
                            <label for="title">Provide a title for the event</label>
                            <br> <input type="text" name="title" value="{{old('title')}}" autofocus>
                            <livewire:artist-add
                            >
                            </livewire:artist-add>
                            @error('title')
                            <span>
                                <small>
                                    {{ $message }}
                                </small>
                            </span>
                            @enderror
                            <br><label for="date">Set a date</label>
                            <br> <input type="date" name="date" value="{{old('date')}}" placeholder="yyyy-mm-dd">
                            <br><label for="date_to">Set an end date (optional)</label>
                            <br> <input type="date" name="date_to" value="{{old('date_to')}}" placeholder="yyyy-mm-dd">
                            <br><label for="location">Set a location</label>
                            <br> <input type="text" value="{{old('location')}}" name="location">
                            <br><label for="doors">Opening times</label>
                            <br> <input type="time" name="doors" value="{{old('doors')}}" placeholder="00:00">
                            <br><label for="tickets">Provide a link to the tickets</label>
                            <br> <input type="text" value="{{old('tickets')}}" name="tickets">
                            @error('tickets')
                            <span>
                                <small>
                                    {{ $message }}
                                </small>
                            </span>
                            @enderror
                            <br><label for="description">Add a description for the post</label>
                            <br><textarea type="text" name="description"
                                          x-data="{ resize: () => { $el.style.height = '5px'; $el.style.height = $el.scrollHeight + 'px' } }"
                                          x-init="resize()"
                                          @input="resize()">{{old('description')}}</textarea>
                            <br><label for="images[]">Select the accompanying images</label>
                            <br> <input type="file" name="images[]" value="{{old('images[]')}}" multiple/>
                            @error('images.*')
                            <span>
                                <small>
                                    {{ $message }}
                                </small>
                            </span>
                            @enderror
                            <br><label for="additional_category">Provide an extra category (optional)</label>
                            <br>
                            <select name="additional_category">
                                <option value="concert" selected>Concert (default)
                                </option>
                                <option value="exposition">Exposition
                                </option>
                            </select>
                            <br><label for="additional_description">Add a description for the additional category
                                (optional)</label>
                            <br> <input type="text" value="{{old('additional_description')}}"
                                        name="additional_description">
                            <br>
                            <button type="submit">Upload</button>
                        </form>
                    </section>
                </div>

            </div>

        </div>
    </div>

@endsection
