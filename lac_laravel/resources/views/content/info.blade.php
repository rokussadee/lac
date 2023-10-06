@extends('layouts.app', ['title' => 'about us'])

@section('content')

    <div class="grid info">
        <div class="section">
            <div id="statement" class="gedragscode" style=" border-top: 1px solid black; border-color: black">
                <h2 style="font-size:2rem;display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid #4fad00; color: #4fad00;">
                    In our venue</h2>
                <p style="color: #4fad00">
                    we don’t tolerate bullying, harassment, or any kind of discriminatory behavior<br>We
                    actively react against any racist, sexist, transphobic, homophobic,<br>and similarly problematic
                    language<br>We believe that by taking more collective responsibility,<br>we can work towards an
                    environment<br>where everyone's experience is equally pleasant and enjoyable
                </p>
                <br>
                <h2 style="font-size:2rem;display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid red;">
                    Dans notre salle</h2>
                <p>nous ne tolérons pas le harcèlement, pas l’intimidation,<br>
                    ou toute forme de comportement discriminatoire<br>Nous réagissons
                    activement contre les propos racistes, sexistes, transphobes,<br>homophobes
                    et autres propos problématiques similaires<br>
                    Nous pensons qu’en assumant davantage de responsabilités collectives,<br>
                    nous pouvons œuvrer en faveur d&#39;un environnement,<br>où l&#39;expérience de
                    chacun est aussi agréable et plaisante
                </p>
                <br>
                <h2 style="font-size:2rem;display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid #0087ff; color: #0087ff">
                    In onze plek</h2>
                <p style="color: #0087ff">
                    tolereren we geen pesterijen, intimidatie of enige vorm van discriminerend gedrag<br>
                    We reageren actief tegen elk racistisch, seksistisch,<br>trans- en homofoob, en ander
                    taalmisbruik<br>Wij
                    geloven dat we door meer collectieve verantwoordelijkheid te nemen,<br>kunnen werken aan een
                    omgeving
                    die door iedereen<br>als even prettig en aangenaam ervaren wordt.
                </p>
                <br>
                <h2 style="font-size:2rem;display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid red;">
                    Helpline</h2>
                <p>02 552 48 48
                    genderkamer vlaamse ombudsdienst
                </p>
            </div>
            <div style="border-bottom: 1px solid black; border-top: 1px solid black" x-data="showbuttons">
                @include('partials.carousel', ['images'=>$lacimages, 'alt' => 'image of les ateliers claus venue, crickxstraat 15 rue crickx (Saint-Gilles, 1060, Brussels)'])
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.1836946317662!2d4.334086490493138!3d50.82776129861146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3780bcc34cd%3A0x9e26536fc68875bf!2sLes%20Ateliers%20Claus!5e0!3m2!1sen!2sbe!4v1692383128296!5m2!1sen!2sbe"
                        title="Streets" style="border:none;"></iframe>
                </div>
            </div>
            <div id="roskotinfo" class="gedragscode" style="border-bottom: 1px solid black; border-color: black;">
                <h2 style="font-size:2rem;display: inline-block; padding-right: 5px; padding-left: 5px; margin-bottom: 10px; border: 1px solid red; border: 1px solid red; border-color: black; color: black">
                    roskot</h2>
                <p style="color: black">
                    roskot is a side project by les ateliers claus. based in aalst, the venue consists of an old
                    farmstead with
                    a big garden. even though roskot is aimed more towards sound art and sound installations, it is
                    also
                    often the stage for concerts and festivals.
                </p>
                <br>
                <a target="_blank" href="https://www.roskot.be"><p>check out roskot.be</p></a>
            </div>

            <div style="border-bottom: 1px solid black"
                 x-data="showbuttons">
                @include('partials.carousel', ['images'=>$roskotimages, 'alt' => 'image of roskot venue, ninovesteenweg 28 (Denderleeuw, 9320, Aalst)'])
            </div>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10059.812740447716!2d4.035837!3d50.924583!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3bd4654936bd9%3A0x3d2c0b13fe0aa66b!2sN405%2028%2C%209320%20Aalst!5e0!3m2!1sen!2sbe!4v1692383011210!5m2!1sen!2sbe"
                        title="Streets-copy-copy" style="border:none;"></iframe>
                </div>
            </div>

            <div id="contactinformation" class="about-us">
                <h2>
                    contact information</h2>
                <a target="_blank" href="mailto:info@lesateliersclaus.com">
                    <p>mail: info@lesateliersclaus.com</p></a>
                <p style="color:black;">btw: 0889.040.929</p>
                <p style="color:black;">bank: Be59 0019 4330 0626</p>
            </div>
            <div style="height: .1px">
            </div>
        </div>

        <div id="newsletterCard" class="left card desktopBorder mobileBottom">
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
