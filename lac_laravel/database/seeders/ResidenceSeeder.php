<?php

namespace Database\Seeders;

use App\Helpers\Helper;
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
            $residence2 = Residence::create([
                'title' => 'EC Band',
                'slug' => Helper::createSlug('App\Models\Residence', 'EC Band'),
                'date' => new Carbon('2022-12-13'),
                'date_to' => new Carbon('2022-12-16'),
                'description' => 'A collaboration between New Yorker Luke Calzonetti (Run Dust, Sugarstick & Xerox, Childabuse) and Limburgian Stijn Wybouw (KRAMP, Kraak records) of transcendental improv overtones. Undulating layers of synth lashings, cymbal echoes, and some laid-back guitar action mesh in a spaced out trip in the physical and astral plane.

A filmic hitchhike to nowhere. Their first LP just came out your way via the great Meakusma avenue.',
                'images' => json_encode(['EC band Bos 2.jpg', 'Image 20-11-2022 at 23.31.jpg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['<iframe style="border: 0; width: 100%; height: 42px;" src="https://bandcamp.com/EmbeddedPlayer/album=242291429/size=small/bgcol=ffffff/linkcol=de270f/transparent=true/" seamless><a href="https://meakusma.bandcamp.com/album/the-ec-band">The EC Band by EC Band</a></iframe>']),
                'videos' => json_encode([]),
                'isActive' => true

            ]),
            $residence3 = Residence::create([
                'title' => 'GOING',
                'slug' => Helper::createSlug('App\Models\Residence', 'GOING'),
                'date' => new Carbon('2022-12-12'),
                'date_to' => new Carbon('2022-12-16'),
                'description' => 'Is a Belgian based group, had a skeletal line up of 2 drummers, (João Lobo and Mathieu Calleja), and 2 keyboards/synths/ fender rhodes + plenty of electronics (Giovanni Di Domenico and Pak Yan Lau).
The sound that they come up with could be loosely post-rock, but also closely allied to improvised, experimental and minimal music.

Their universe is all about trance, where time is being stretched and transformed in different ways. Electronic sounds weaves textures, while polyrhythmic cells are being laid down, sometimes hard to distinguish who is doing what.
Their music can be described as one big trip, a voyage into today’s urban stellar system.

Due to the leave of one of the members (Mathieu Calleja), Going is researching in this residency for possible new musical directions and guests or/and members. Going invites Manuel Mota, Gaspard Sicx and Giotis Damianidis for some experimentations during this week.',
                'images' => json_encode(['Going.jpg', 'Image 20-11-2022 at 23.20.jpg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['<iframe style="border: 0; width: 100%; height: 42px;" src="https://bandcamp.com/EmbeddedPlayer/album=471688995/size=small/bgcol=ffffff/linkcol=de270f/transparent=true/" seamless><a href="https://goingmusic.bandcamp.com/album/live-meakusma">Live @ MEAKUSMA by GOING + Tetuzi Akiyama &amp; Manuel Mota</a></iframe>']),
                'videos' => json_encode([]),
                'isActive' => true

            ]),
            $residence4 = Residence::create([
                'title' => 'alto fuero',
                'slug' => Helper::createSlug('App\Models\Residence', 'alto fuero'),
                'date' => new Carbon('2023-01-08'),
                'date_to' => new Carbon('2023-01-20'),
                'description' => 'Victoria Palacios and Loto Retina combining deliciously aggressive Spanish poetry with cute-arrogant recorder sounds and unregulated percussion full of twisted samples. Reggaeton? Folk circus? Lo-fi noise?',
                'images' => json_encode(['artworks-6ynmxT4nLJn71o7I-nZXVmQ-t500x500.jpg', 'avatars-HwzUVEFjo80Mfq6J-It2yGw-t500x500.jpg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1290940204&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/user-160645004" title="Alto Fuero" target="_blank" style="color: #cccccc; text-decoration: none;">Alto Fuero</a> · <a href="https://soundcloud.com/user-160645004/live-gz" title="live Grrrnd Zero" target="_blank" style="color: #cccccc; text-decoration: none;">live Grrrnd Zero</a></div>']),
                'videos' => json_encode([]),
                'isActive' => true
            ]),
            $residence5 = Residence::create([
                'title' => 'chris imler',
                'slug' => Helper::createSlug('App\Models\Residence', 'chris imler'),
                'date' => new Carbon('2023-01-22'),
                'date_to' => new Carbon('2023-01-27'),
                'description' => "He's the most unscrupulous, corrupt and fascinating drummer in all of Berlin. He has played in the semi-legendary Golden Showers and The Spankings (with Taylor Savvy). Other references from his CV include: Peaches, Soffy O, Jens Friebe, Electronicat, Namosh, Jim Avignon, etc. Currently. A one-man-gang-bang: astray vocals, square bass lines and stuttering ringtones.

http://chrisimler.com",
                'images' => json_encode(['Party-for-One-Chris-20000101_0007-Kopie.jpg', 'Party-for-One-Chris-20000101_0005-Kopie.jpg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['<iframe style="border: 0; width: 100%; height: 42px;" src="https://bandcamp.com/EmbeddedPlayer/album=4265603187/size=small/bgcol=ffffff/linkcol=de270f/transparent=true/" seamless><a href="https://riolabel.bandcamp.com/album/country-club">Country Club by Chris Imler</a></iframe>']),
                'videos' => json_encode(['YeVJ75ljjB8']),
                'isActive' => true
            ]),
            $residence6 = Residence::create([
                'title' => 'geier aus stahl',
                'slug' => Helper::createSlug('App\Models\Residence', 'geier aus stahl'),
                'date' => new Carbon('2023-01-19'),
                'date_to' => new Carbon('2023-01-24'),
                'description' => "Is one of the many artistic guises of Leonard Prochazka. No superfluous elements take away from the core experience of his sound. Somewhere a statement from David Byrne crossed our path, able to highlight something of the essence of Leonard's art: “No matter how alienated the subject or the singer might appear, the groove and its connection to the body would provide solace and grounding. But the edgy, uncomfortable stuff was still on the foreground”. The debut album 'Strapazen und Genesung' takes us to an exciting world that twists, squeaks and creaks, yet is grounded by an unmistakable groove.

                images by Marysia Swietlicka
                https://marysia-swietlicka.com/",
                'images' => json_encode(['MarysiaSwietlicka_GeierAusStahl-3.jpg', 'MarysiaSwietlicka_geierausstahl.jpg']),
                'location' => 'les ateliers claus',
                'links' => json_encode(['<iframe style="border: 0; width: 100%; height: 42px;" src="https://bandcamp.com/EmbeddedPlayer/album=4000691741/size=small/bgcol=ffffff/linkcol=de270f/transparent=true/" seamless><a href="https://geierausstahl.bandcamp.com/album/strapazen-und-genesung">Strapazen und Genesung by Geier Aus Stahl</a></iframe>']),
                'videos' => json_encode(['jEjEoPzk7No']),
                'isActive' => true
            ]),
        ];
    }
}
