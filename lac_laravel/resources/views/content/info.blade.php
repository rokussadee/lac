@extends('layouts.app')

@section('content')

    <div class="grid info">
        <div class="section">
            <div class="titleBar" style="color: red; border-color: red"><h1>public statement</h1></div>
            <div class="gedragscode">
                <h2 style="display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid red;">
                    en</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in.
                    Sollicitudin ac orci phasellus egestas tellus. Viverra nam libero justo laoreet. Praesent tristique
                    magna sit amet purus. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan.
                    Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Dui faucibus in
                    ornare quam viverra orci sagittis eu. Aliquam faucibus purus in massa tempor nec. Gravida cum sociis
                    natoque penatibus et magnis.
                </p>
                <br>
                <h2 style="display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid red;">
                    fr</h2>
                <p>
                    Enim sed faucibus turpis in eu. Sed velit dignissim sodales ut. Arcu odio ut sem nulla pharetra.
                    Consequat interdum varius sit amet mattis vulputate enim nulla aliquet. Adipiscing enim eu turpis
                    egestas pretium aenean pharetra. Amet massa vitae tortor condimentum lacinia quis vel eros donec. Ut
                    placerat orci nulla pellentesque dignissim enim sit amet venenatis. Fermentum iaculis eu non diam.
                    Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Convallis aenean et tortor at
                    risus. Dolor sit amet consectetur adipiscing elit. Sed id semper risus in hendrerit. Sem fringilla
                    ut morbi tincidunt augue. A lacus vestibulum sed arcu. Tincidunt tortor aliquam nulla facilisi cras
                    fermentum odio eu feugiat. Donec enim diam vulputate ut pharetra sit amet. Malesuada nunc vel risus
                    commodo viverra maecenas accumsan. Id aliquet lectus proin nibh nisl.
                </p>
                <br>
                <h2 style="display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid red;">
                    nl</h2>
                <p>Ac ut consequat semper viverra. Morbi tristique senectus et netus. Dignissim cras tincidunt lobortis
                    feugiat. Amet est placerat in egestas erat imperdiet sed euismod nisi. Maecenas ultricies mi eget
                    mauris pharetra et ultrices. Tempor commodo ullamcorper a lacus vestibulum. In metus vulputate eu
                    scelerisque felis imperdiet proin fermentum leo. In metus vulputate eu scelerisque felis. At in
                    tellus integer feugiat. Imperdiet sed euismod nisi porta. Scelerisque eu ultrices vitae auctor eu
                    augue ut lectus.
                </p></div>
            <div class="titleBar">
                <h1>les ateliers claus</h1>
            </div>
            <div style="border-bottom: 1px solid black" x-data="showbuttons">
                @include('partials.carousel', ['images'=>$lacimages])
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=crickxstraat%2015+(roskot)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                            title="Streets" style="border:none;"></iframe>
                    {{--                    <div class="iframe-info">--}}
                    {{--                        <p>les&nbsp;ateliers&nbsp;claus</p>--}}
                    {{--                        <p>crickxstraat&nbsp;15&nbsp;rue&nbsp;crickx</p>--}}
                    {{--                        <p>1060 saint-gilles, brussels</p>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <article class="about-us">
                <p>
                    les ateliers claus is an intimate concert venue in brussels focused on alternative music. we aim
                    to
                    be a
                    space open for experiments.<br><br>les ateliers claus is a project founded by frans claus.
                </p>
            </article>

            <div class="titleBar">
                <h1>roskot</h1>
            </div>
            <div style="border-bottom: 1px solid black"
                 x-data="showbuttons">
                @include('partials.carousel', ['images'=>$roskotimages])
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=ninovesteenweg%2028+(roskot)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        title="Streets-copy-copy" style="border:none;"></iframe>
                    {{--                    <div class="iframe-info">--}}
                    {{--                        <p>les&nbsp;ateliers&nbsp;claus</p>--}}
                    {{--                        <p>crickxstraat&nbsp;15&nbsp;rue&nbsp;crickx</p>--}}
                    {{--                        <p>1060 saint-gilles, brussels</p>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <article class="about-us">
                <p>
                    roskot is a side project by les ateliers claus. based in aalst, the venue consists of an old
                    farmstead with
                    a big garden. even though roskot is aimed more towards sound art and sound installations, it is
                    also
                    often the stage for concerts and festivals.
                </p>
                <br>
                <a href="https://www.roskot.be"><p> => check out roskot.be</p></a>
            </article>

            <div class="titleBar">
                <h1>contact information</h1>
            </div>
            <article id="roskotcontact" class="about-us" style="border-bottom: 1px solid black;">
                <div>
                    <p>mail: <a href="mailto:info@lesateliersclaus.com">info@lesateliersclaus.com</a></p>
                    <p>bank: BE 0889.040.929</p>
                    <p>IBAN: BE89 7310 0585 0485</p>
                    <p>BIC: KREDBEBB</p></div>
            </article>
            <div style="height: .1px">
            </div>
        </div>

        <div class="left card desktopBorder mobileBottom">
            <div class="newsletterInput">
                <div>
                    <h1>subscribe to our newsletter:</h1>
                </div>
                <form action="{{route('subscribers.store')}}" method="post" class="inputContainer">
                    @csrf
                    <input id="email-input" type="email" name="email" autocomplete="off" required/>
                    <label class="label-name"><span class="content-email">e-mail</span>
                        <div id="arrow" x-data>
                            <button type="submit" @click="console.log('click')">
                                <div></div>
                                <div></div>
                                <div></div>
                            </button>
                        </div>
                    </label>

                    <script>
                        const arrow = document.getElementById('arrow')
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
                            if (input.value === '') {
                                hideArrow()
                            } else {
                                arrow.setAttribute('data-open', '')
                            }
                        })


                        function hideArrow() {
                            arrow.removeAttribute('data-open')
                            arrow.setAttribute('data-closing', '')

                            arrow.addEventListener('animationend', () => {
                                arrow.removeAttribute('data-closing')
                            }, {once: true})
                        }

                    </script>
                </form>
                @if(session('error') || session('success'))
                    <span x-data="{ showMessage: true }" x-show="showMessage"
                          x-intersect.full="setTimeout(() => showMessage = false, 5000)"
                        @class([
                            'message',
                            'error' => session('error'),
                            'success' => session('success')]
                        )>{{session('error')}}{{session('success')}}</span>
                @endif
            </div>
        </div>

    </div>
@endsection
