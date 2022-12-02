@extends('layouts.app')

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
                class="flex"
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
                class="flex"
            >
                @include('partials.card', ['title' => 'request a residency'])
            </button>
        </div>
        <div x-show="activeTab === 'tab1'"
             class="left card sectioncontent nomobile  border-top"
        >
            @include('partials.infocard', ['description' => '<a href = "/"><h1>take a look at the past residencies in our archive</h1></a>'])
        </div>
        <div x-show="activeTab === 'tab2'"
             class="left card sectioncontent nomobile  border-top"
        >
            @include('partials.infocard', ['description' => 'contact us: <a href="mailto:info@lesateliersclaus.com"><h1>info@lesateliersclaus.com</h1></a>'])
        </div>
        <div style="grid-column: 2; grid-row: 1">
            @foreach($currentresidencies as $residency)
                <section
                    x-show="activeTab === 'tab1'"
                    x-data="showbuttons"
                    class="residenceSection section1 sectioncontent {{$loop->iteration + count($currentresidencies) == count($upcoming) + count($currentresidencies) ? 'resSectionLast' : ''}}"
                >
                    <div class="titleBar residenceTitle">
                        <h1>in&nbsp;residence
                            /&nbsp;{{$residency->title}}</h1>
                    </div>
                    <div class="residenceContent ">
                        @include('partials.sidecarousel', ['images' => $residency->images])
                        @include('partials.sidesection', ['description' => $residency->description, 'links'=>$residency->links])
                    </div>
                </section>
            @endforeach
            @if(isset($upcoming))
                @foreach($upcoming as $residency)
                    <section
                        x-show="activeTab === 'tab1'"
                        x-data="showbuttons"
                        class="residenceSection section1 sectioncontent {{$loop->iteration + count($currentresidencies) == count($upcoming) + count($currentresidencies) ? 'resSectionLast' : ''}}"
                    >
                        <div class="titleBar residenceTitle">
                            <h1>{!! Helper::dateToString($residency->date) !!}
                                &DoubleLongRightArrow;&nbsp;{!! Helper::dateToString($residency->date_to) !!}
                                /&nbsp;{{$residency->title}}</h1>
                        </div>
                        <div class="residenceContent ">
                            @include('partials.sidecarousel', ['images' => $residency->images])
                            @include('partials.sidesection', ['description' => $residency->description, 'links'=>$residency->links])
                        </div>
                    </section>
                @endforeach
            @endif
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
