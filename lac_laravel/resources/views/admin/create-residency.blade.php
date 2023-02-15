@extends('layouts.app')

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
                        <h1>Create Residency</h1>
                    </section>

                </div>
                <div class="event-item">

                    <section>
                        <form class="admin-form" action="{{route('admin.residencies.upload-residency')}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <label for="title">Provide a title for the residency</label>
                            <br> <input type="text" name="title" autofocus>
                            @error('title')
                            <span>
                                    <small>
                                        {{ $message }}
                                    </small>
                                </span>
                            @enderror
                            <br><label for="date">Set a date</label>
                            <br> <input type="date" name="date" placeholder="yyyy-mm-dd">
                            @error('date')
                            <span>
                                    <small>
                                        {{ $message }}
                                    </small>
                                </span>
                            @enderror
                            <br><label for="date_to">Set an end date</label>
                            <br> <input type="date" name="date_to" placeholder="yyyy-mm-dd">
                            @error('date_to')
                            <span>
                                    <small>
                                        {{ $message }}
                                    </small>
                                </span>
                            @enderror
                            <br><label for="location">Set a location</label>
                            <br> <input type="text" name="location">
                            <br><label for="links">Provide links</label>
                            <br>
                            <div x-data="dynamicfields">
                                <div>
                                    <table class="dynamic-field">
                                        <tbody>
                                        <template x-for="(field, index) in fields" :key="index">
                                            <tr>
                                                <td x-text="index + 1"></td>
                                                <td><input x-model="field.link" type="text" name="links[]"
                                                           class="form-control"></td>
                                                <td>
                                                    <button type="button"
                                                            @click="removeField(index)">&times;
                                                    </button>
                                                </td>
                                            </tr>
                                        </template>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right">
                                                <button type="button" @click="addNewField()">+ Add
                                                    Row
                                                </button>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            @error('links.*')
                            <span>
                                    <small>
                                        {{ $message }}
                                    </small>
                                </span>
                            @enderror
                            <br><label for="links">Provide videos</label>
                            <br>
                            <div x-data="dynamicfields">
                                <div>
                                    <table class="dynamic-field">
                                        <tbody>
                                        <template x-for="(field, index) in fields" :key="index">
                                            <tr>
                                                <td x-text="index + 1"></td>
                                                <td><input x-model="field.link" type="text"
                                                           placeholder="e.g. https://www.youtube.com/watch?v=-oTpSat3ta4"
                                                           name="videos[]"
                                                           class="form-control"></td>
                                                <td>
                                                    <button type="button"
                                                            @click="removeField(index)">&times;
                                                    </button>
                                                </td>
                                            </tr>
                                        </template>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right">
                                                <button type="button" class="btn btn-info" @click="addNewField()">+ Add
                                                    Row
                                                </button>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            @error('videos.*')
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
                                          @input="resize()"> </textarea>
                            <br><label for="images[]">Select the accompanying images</label>
                            <br> <input type="file" name="images[]" multiple/>
                            <br>
                            <button type="submit">Upload</button>
                        </form>

                    </section>
                </div>

            </div>

        </div>
    </div>

@endsection
