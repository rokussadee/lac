@extends('layouts.app', ['title' => 'in residence'])

@section('content')
    <div
        x-data="{activeTab: 'tab1'}"
        class="grid">
        <div
            :class="{'activelink' : activeTab === 'tab1'}"
            class="right card border-top"
            data-id="tab1"
            style="display: block">
            <button
                @click="activeTab = 'tab1'"
                class="card-button"
            >

                @include('partials.card', ['title' => 'artists'])
            </button>
        </div>
        <div
            :class="{'activelink' : activeTab === 'tab2'}"
            class="right card mobileBottom"
            data-id="tab2"
            style="display: block">
            <button
                @click="activeTab = 'tab2'"
                class="card-button"
            >
                @include('partials.card', ['title' => 'request a residency'])
            </button>
        </div>
        {{--    This should be enabled when archive page is completed    --}}
        {{--        <div x-show="activeTab === 'tab1'"--}}
        {{--             class="left card sectioncontent nomobile  border-top"--}}
        {{--        >--}}
        {{--            @include('partials.infocard', ['description' => '<a target="_blank" href = "/"><h1>take a look at the past residencies in our archive</h1></a>'])--}}
        {{--        </div>--}}
        <div x-show="activeTab === 'tab2'"
             class="left card sectioncontent nomobile  border-top"
        >
            @include('partials.infocard', ['description' => 'contact us: <a target="_blank" href="mailto:info@lesateliersclaus.com"><h1>info@lesateliersclaus.com</h1></a>'])
        </div>
        <div style="grid-column: 2; grid-row: 1">
            {{--            @isset($noupcoming)--}}
            {{--                <section--}}
            {{--                    x-show="activeTab === 'tab1'"--}}
            {{--                    x-data="showbuttons"--}}
            {{--                    class="residenceSection section1 sectioncontent"--}}
            {{--                >--}}
            {{--                    <div id="noupcomingTitle">--}}
            {{--                        <div class="titleBar residenceTitle"--}}
            {{--                             style="color: red; border-color: red">--}}
            {{--                            <h1>future residencies will be featured on this page--}}
            {{--                                soon. our latest residencies--}}
            {{--                                are displayed--}}
            {{--                                below.</h1>--}}

            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </section>--}}
            {{--            @endisset--}}
            @isset($upcoming)
                @foreach($upcoming as $residency)
                    <section
                        x-show="activeTab === 'tab1'"
                        x-data="showbuttons"
                        class="residenceSection section1 sectioncontent"
                    >
                        <div class="titleBar residenceTitle">
                            <h1>{{$residency->title}}
                                @isset($residency->date, $residency->date_to)
                                    /&nbsp;{!! Helper::dateToString($residency->date) !!}
                                    >&nbsp;{!! Helper::dateToString($residency->date_to) !!}
                                @else /&nbsp;tba
                                @endisset
                            </h1>
                        </div>
                        <div class="residenceContent ">
                            @include('partials.sidecarousel', ['images' => $residency->images])
                            @include('partials.sidesection', ['description' => $residency->description, 'links'=>$residency->links, 'videos'=>$residency->videos])
                        </div>
                    </section>
                @endforeach
            @endisset
            @isset($currentresidencies)
                @foreach($currentresidencies as $residency)
                    <section
                        x-show="activeTab === 'tab1'"
                        x-data="showbuttons"
                        class="residenceSection section1 sectioncontent"
                    >
                        <div class="titleBar residenceTitle"
                             style="display:flex; justify-content: space-between">
                            <h1>{{$residency->title}} /&nbsp;in&nbsp;residence</h1>
                            @can('content_crud')
                                <p><a style="color: red;margin-top: 5px; margin-right: 10px"
                                      href="{{route('admin.residencies.edit-residency', ['residency'=>$residency])}}">edit...</a>
                                </p>
                            @endcan
                        </div>
                        <div class="residenceContent ">
                            @include('partials.sidecarousel', ['images' => $residency->images])
                            @include('partials.sidesection', ['description' => $residency->description, 'links'=>$residency->links, 'videos'=>$residency->videos])
                        </div>
                    </section>
                @endforeach
            @endisset
            @isset($pastresidencies)
                @foreach($pastresidencies as $residency)
                    <section
                        x-show="activeTab === 'tab1'"
                        x-data="showbuttons"
                        class="residenceSection section1 sectioncontent {{$loop->iteration == count($pastresidencies) ? 'resSectionLast' : ''}}"
                    >
                        <div class="titleBar residenceTitle">
                            <h1>{{$residency->title}}
                                /&nbsp;{!! Helper::dateToString($residency->date) !!}
                                >&nbsp;{!! Helper::dateToString($residency->date_to) !!}
                            </h1>
                        </div>
                        <div class="residenceContent ">
                            @include('partials.sidecarousel', ['images' => $residency->images])
                            @include('partials.sidesection', ['description' => $residency->description, 'links'=>$residency->links, 'videos'=>$residency->videos])
                        </div>
                    </section>
                @endforeach
            @endisset
            @foreach($staticcontent as $content)
                <section
                    x-show="activeTab === 'tab2'"
                    x-data="showbuttons"
                    class="section section1 sectioncontent {{$loop->last == true ? 'resSectionLast' : ''}}"
                >
                    <div class="titleBar residenceTitle">
                        <h1>{{$content->title}}</h1>
                    </div>
                    <div class="bigCarousel">
                        @include('partials.sidecarousel', ['images' => $content->images])
                    </div>
                    <div class="requestResidencyContainer">
                        @include('partials.sidesection', ['description' => $content->body])
                    </div>
                </section>
            @endforeach
            <div style="height: .1px">
            </div>
        </div>

    </div>
@endsection
