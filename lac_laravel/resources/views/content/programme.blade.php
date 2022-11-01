@extends('layouts.app')

@section('content')


    <section class="cardContainer">
        <div class="left card">
            <div>
                <h1>location: roskot</h1>
                <h1>doors: 19:30</h1>
            </div>
            <div>
                <h1>tickets</h1>
            </div>
        </div>
        <div class="left card additional">
            <div>
                <h1>collaboration</h1>
                <h1>not so difficult</h1>
            </div>
            <div>
                <h1>link</h1>
            </div>
        </div>
    </section>
    <section>
        <div class="scrollContainer">
            <figure class="carousel">
                <img src="{{asset('./assets/senyawa1.png')}}">
                <img src="{{asset('./assets/senyawa2.png')}}">
                <img src="{{asset('./assets/orphan.jpeg')}}">
            </figure>
            {{--            <button id="scrollButton">--}}
            {{--                pijltje--}}
            {{--            </button>--}}
        </div>
        <article class="eventContainer">
            senyawa is an experimental band from java, indonesia, consisting of rully shabara and wukir suryadi. the
            band
            was formed in 2010 in yogyakarta.

            the band mixes influences from musical and folklore traditions from the indonesian archipelago with
            experimental music. the band’s neo-tribal sound has been described to mix “punk attitude” with
            “avant-garde
            aesthetics”. according to critics, senyawa has “managed to
            embody the aural flavours of javanese music while exploring the framework of experimental
            music practice, pushing the boundaries of both traditions” to create a sound that is “thoroughly
            out of this world.”

            shabara provides his extended vocal techniques to senyawa. the band’s lyrics are in various
            languages of indonesia, including sulawesian, javanese, and indonesian. senyawa’s music is
            provided by suryadi’s self-built musical instruments made from bamboo and traditional
            agricultural tools from rural indonesia.

            eva van deuren has been wayfaring as orphan fairytale for the past 15 years and counting.
            with her electronic psychedelia that deftly teeters between the bubbly and the eerie, van deuren
            is a prolific presence in our spheres and her music is a constant which irrefutably touches and
            enchants all those who encounter it. over the past few years she has integrated the celtic harp
            into her repertoire, crafting new sounds that seamlessly meld into the narrative of her unique
            sonic trajectory.

        </article>
    </section>
    <section class="cardContainer">
        <div class="right card">
            <a href=""><h1>senyawa + orphan fairytale</h1></a>
            <h2>sat 12 oct 2022</h2>
        </div>
        <div class="right card">
            <a href=""><h1>pat thomas - seymour wright -
                    paul abbott - chris corsano</h1></a>
            <h2>sat 12 oct 2022</h2>
        </div>
        <div class="right card">
            <a href=""><h1>city band - la symétrie des fruits</h1></a>
            <h2>sat 12 oct 2022</h2>
        </div>
        <div class="right card">
            <a href=""><h1>karim djaoui</h1></a>
            <h2>sat 12 oct 2022</h2>
        </div>
    </section>
@endsection
