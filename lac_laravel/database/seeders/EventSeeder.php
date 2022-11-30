<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            $event1 = Event::create([
                'title' => 'EC Band',
                'date' => new Carbon('2022-12-17'),
                'description' => '<p>A collaboration between New Yorker Luke Calzonetti (Run Dust, Sugarstick & Xerox, Childabuse) and Limburgian Stijn Wybouw (KRAMP, Kraak records) of transcendental improv overtones. Undulating layers of synth lashings, cymbal echoes, and some laid-back guitar action mesh in a spaced out trip in the physical and astral plane.</p><br><p>
A filmic hitchhike to nowhere. Their first LP just came out your way via the great Meakusma avenue.</p><br><a href="https://meakusma.bandcamp.com/album/the-ec-band"><p>https://meakusma.bandcamp.com/album/the-ec-band</p></a>',
                'images' => json_encode(['EC band Bos 2.jpg', 'Image 20-11-2022 at 23.31.jpeg']),
                'location' => '28 ninovesteenweg, alost',
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/going-ec-band-tickets-469871547447'
            ]),

            $event2 = Event::create([
                'title' => 'GOING',
                'date' => new Carbon('2022-12-17'),
                'description' => '<p>Is a Belgian based group, had a skeletal line up of 2 drummers, (João Lobo and Mathieu Calleja), and 2 keyboards/synths/ fender rhodes + plenty of electronics (Giovanni Di Domenico and Pak Yan Lau).
The sound that they come up with could be loosely post-rock, but also closely allied to improvised, experimental and minimal music.
</p></br><p>
Their universe is all about trance, where time is being stretched and transformed in different ways. Electronic sounds weaves textures, while polyrhythmic cells are being laid down, sometimes hard to distinguish who is doing what.
Their music can be described as one big trip, a voyage into today’s urban stellar system.
</p></br><p>
Due to the leave of one of the members (Mathieu Calleja), Going is researching in this residency for possible new musical directions and guests or/and members. Going invites Manuel Mota, Gaspard Sicx and Giotis Damianidis for some experimentations during this week.</p><br><a href="https://goingmusic.bandcamp.com/"><p>https://goingmusic.bandcamp.com</p></a>',
                'images' => json_encode(['Going.jpeg', 'Image 20-11-2022 at 23.20.jpeg']),
                'location' => '15 rue crickx, brussels',
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/going-ec-band-tickets-469871547447',
                'additional_category' => 'test',
                'additional_description' => '<p>this event is a collaboration with belgian record label <a href = "https://www.instagram.com/v23be/">v23</a></p>',
            ]),
            $event3 = Event::create([
                'title' => 'karim djaoui',
                'date' => new Carbon('2022-12-17'),
                'date_to' => new Carbon('2023-12-31'),
                'description' => '<p>Artiste autodidacte et pluridisciplinaire, Karim Djaoui travaille depuis plusieurs années le fil sur des supports variés allant de tissus aux photographies anciennes en passant par des cartes géographiques et des papiers recyclés, dans des formats de toutes tailles. Ses œuvres ont notamment été exposées dans l’Espace Vanderborght, au Pianocktail, dans la Librairie Poëtini, chez Pierre Papier Ciseaux, à la Maison Commune suite à une résidence…
</p></br><p>
Karim Djaoui compte parmi les coups de cœur du Parcours d’artistes de Saint-Gilles 2022 pour sa série de portraits brodés.
</p></br><a href="mailto:Djaoui.karim@gmx.fr"><p>
Djaoui.karim@gmx.fr</p></a><br>
<p>
0497 87 02 05
</p>
<p>
Insta : @djaouik
</p><p>
Facebook : 2kaval
</p>
',
                'images' => json_encode(['20221103_092411.jpg ', '20221103_092708.jpg', '20221103_093020.jpg']),
                'location' => '15 rue crickx, brussels',
                'additional_category' => 'exposition',
                'additional_description' => '<p>karim djaoui&apos;s works are on display in the les ateliers claus headquarters</p>',
            ]),
//            $event3 = Event::create([
//                'title' => 'Hogepriester "Cornelis Maria Theresia',
//                'date' => new Carbon('2022-12-17'),
//                'date_to' => new Carbon('2023-12-31'),
//                'description' => '<p>ballekes meeee tmatteSaus
//</p>
//<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1375060375%3Fsecret_token%3Ds-PbtBQzxLe0G&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Arial,sans-serif;"> </div>
//',
//                'images' => json_encode(['309205617_5604054183021522_8107877733715353418_n.jpg', '310437765_1199459244119328_6809483521739371860_n.jpg', 'verschmutzt2_5.png']),
//                'location' => '15 rue crickx, brussels',
//            ]),
        ];

    }
}
