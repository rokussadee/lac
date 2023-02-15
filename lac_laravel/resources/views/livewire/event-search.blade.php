<div class="archiveGrid">
    <div>
        <div class="newsletterInput">
            <form class="inputContainer" wire:ignore onkeydown="return event.key != 'Enter';">
                @csrf
                <input id="email-input" autocomplete="off" required wire:model="searchTerm"/>
                <label class="label-name"><span class="content-email">search</span>

                </label>
                <script>
                    const input = document.getElementById('email-input')

                    input.addEventListener('focus', () => {
                        input.setAttribute('data-focus', '')
                    })
                    input.addEventListener('focusout', () => {
                        if (input.value === '') {
                            input.removeAttribute('data-focus');
                            if (input.hasAttribute('data-open')) {
                                hideArrow()
                            }
                        }

                    })
                    input.addEventListener('input', () => {

                        arrow.setAttribute('data-open', '')
                    })

                </script>
            </form>
        </div>
        @if(!$searchTerm || $searchTerm == '')
            @for($i = $lastYear; $i >= 2006; $i--)
                <div class="year">
                    <a @class(['activeyear'=>$i == $year])id="{{$i}}"
                       {{--                       wire:click="setYear({{$i}})"--}}
                       wire:click="setYear({{$i}})"

                       type="radio"
                       value="{{$i}}"><p>{{$i}}</p></a>
                </div>
            @endfor
        @endif
    </div>
    <div>
        <div class="archive-filters">
            <h1>
                @if($searchTerm && $searchTerm != '')
                    search results for <i style="font-size: 2.5rem">{{$searchTerm}}</i>
                @else
                    events in {{$year}}
                @endif
            </h1>
            @if(!$searchTerm || $searchTerm == '')
                <div>
                    sort:
                    <select
                        wire:change="toggleOrder()"
                        style="margin-bottom: 15px; padding: 15px">
                        <option value="concert">alphabetically
                        </option>
                        <option
                            value="exposition">chronologically
                        </option>
                    </select>
                </div>
            @endif
        </div>
        <section>
            @if($searchTerm && $searchTerm != '')
                <div class="archive-letter">
                    <ul>
                        @foreach($events as $event)
                            <li><a>
                                    {{$event->title}}
                                    @if(count(json_decode($event->images)) > 0)
                                        <img src="{{asset('storage/thumbnails/'.json_decode($event->images)[0])}}"
                                             alt="">
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(!$searchTerm || $searchTerm == '')
                @foreach($filteredEvents as $letter => $children)
                    @if(count($children) > 0)
                        <div class="archive-letter">
                            <div>{{$letter}}</div>
                            <div>
                                @foreach($children as $event)
                                    @if(gettype($event) !== gettype([]))
                                        <p>
                                            <span>[{{$event->date->format('m-d')}}]</span>
                                            <a>
                                                {{$event->title}}
                                                @if(count(json_decode($event->images)) > 0)
                                                    <img
                                                        src="{{asset('storage/thumbnails/'.json_decode($event->images)[0])}}"
                                                        alt="">
                                                @endif
                                            </a>

                                        </p>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </section>
    </div>
</div>
