<div class="event-item">
    <section class="mobileBottom">
        <div style="flex-basis: 30%;">


            @switch($content_type)
                @case('event')
                <a href="{{route('admin.events.edit-event', ['event'=>$item])}}">
                    <h1>
                        {{$item->title}}
                    </h1>
                </a>
                @break
                @case('residency')
                <a href="{{route('admin.residencies.edit-residency', ['residency'=>$item])}}">

                    <h1>
                        {{$item->title}}
                    </h1>
                </a>
                @break
            @endswitch
            <h3>
                @if(isset($item->date))
                    {!! Helper::dateToString($item->date) !!}
                @endif
                @if(isset($item->date_to))
                    <br>
                    > {!! Helper::dateToString($item->date_to) !!}
                @endif
                <hr
                    style="margin: 10px 0px; width: 100%; border-color: black;"
                >
                @foreach($item->getAttributes() as $key => $value)
                    @if($value == null && $key != "isActive")
                        <p>
                            <small
                                @if($key == "date_to" || $key == "additional_description" ||  $key == "videos" ||  $key == "links")
                                style="color: black"
                                @endif
                            >
                                &bull; <span
                                    style="text-transform: uppercase; font-size: .8rem;">{{$key}}</span>
                                missing!
                            </small>

                        </p>
                    @endif
                @endforeach
            </h3>
        </div>
        <div class="admin-event-imageContainer">
            @if(count(json_decode($item->images))>0)
                <img src="{{asset("storage/thumbnails")}}/{{json_decode($item->images)[0] ?? null}}">
            @else
                <p>
                    <small>
                        &bull; no images!
                    </small>

                </p>
            @endif
            @if(count(json_decode($item->images)) > 1)
                <div class="admin-event-thumb">
                    +{{count(json_decode($item->images)) - 1}}
                </div>
            @endif
        </div>
        <div>
            <livewire:toggle-switch :wire:key="$item->id"
                                    :model="$item"
                                    :field="'isActive'">
            </livewire:toggle-switch>
            <livewire:delete-button :wire:key="$item->id"
                                    :model="$item"
            ></livewire:delete-button>
        </div>
    </section>
</div>
