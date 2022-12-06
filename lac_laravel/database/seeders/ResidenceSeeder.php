<?php

namespace Database\Seeders;

use App\Models\Residence;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $residencies = [
            $residence1 = Residence::create([
                'title' => 'Orlan',
                'date' => new Carbon('2022-12-19'),
                'date_to' => new Carbon('2022-12-23'),
                'description' => '<p>
Natural sounds have become too self-evident – they have become ambient in the purest sense; the décor in which we live out our lives, “as ignorable as it is interesting”. These sounds that are all around us, on a day to day basis– that we recognize and that recall feelings within us –can be organized and composed to create something tactile, more concrete.
</p>
</br>
<p>
                 I want to experiment with child-like intuition and work on the remembrance of sound, bringing together the familiar and the distant. I want to collide the worlds of natural - yet complex - everyday sounds with unrecognizable new explorations to create an abstract and textured space.</p>
                 <br><p>
                 Through playing drums at the Conservatorium, I’ve gained insight into different modes of music making, which I’ve synthesized into my own practice. By using acoustic drums as a conductor, triggering constantly modulating samples; by using electronic music software, laying the carpet for the tender feet of sound; by singing, recalling atmospherical spaces and by recording anything and everything.
</p>
</br>
<p>
To continue exploring sound, I am happy to reside at Les Ateliers Claus, where I will be preparing my album release concert that will take place in March 2023.
</p>',
                'images' => json_encode(['Orlan.jpeg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['https://orlan.bandcamp.com/track/gaal-te-nacht'])
            ]),
            $residence2 = Residence::create([
                'title' => 'EC Band',
                'date' => new Carbon('2022-12-13'),
                'date_to' => new Carbon('2022-12-16'),
                'description' => '<p>A collaboration between New Yorker Luke Calzonetti (Run Dust, Sugarstick & Xerox, Childabuse) and Limburgian Stijn Wybouw (KRAMP, Kraak records) of transcendental improv overtones. Undulating layers of synth lashings, cymbal echoes, and some laid-back guitar action mesh in a spaced out trip in the physical and astral plane.</p><br><p>
A filmic hitchhike to nowhere. Their first LP just came out your way via the great Meakusma avenue.</p>',
                'images' => json_encode(['EC band Bos 2.jpg', 'Image 20-11-2022 at 23.31.jpeg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['https://meakusma.bandcamp.com/album/the-ec-band'])
            ]),
            $residence3 = Residence::create([
                'title' => 'GOING',
                'date' => new Carbon('2022-12-12'),
                'date_to' => new Carbon('2022-12-16'),
                'description' => '<p>Is a Belgian based group, had a skeletal line up of 2 drummers, (João Lobo and Mathieu Calleja), and 2 keyboards/synths/ fender rhodes + plenty of electronics (Giovanni Di Domenico and Pak Yan Lau).
The sound that they come up with could be loosely post-rock, but also closely allied to improvised, experimental and minimal music.
</p></br><p>
Their universe is all about trance, where time is being stretched and transformed in different ways. Electronic sounds weaves textures, while polyrhythmic cells are being laid down, sometimes hard to distinguish who is doing what.
Their music can be described as one big trip, a voyage into today’s urban stellar system.
</p></br><p>
Due to the leave of one of the members (Mathieu Calleja), Going is researching in this residency for possible new musical directions and guests or/and members. Going invites Manuel Mota, Gaspard Sicx and Giotis Damianidis for some experimentations during this week.</p>',
                'images' => json_encode(['Going.jpeg', 'Image 20-11-2022 at 23.20.jpeg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['https://goingmusic.bandcamp.com/'])
            ]),
        ];
    }
}
