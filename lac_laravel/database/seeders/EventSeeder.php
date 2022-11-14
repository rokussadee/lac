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
                'title' => 'senyawa + orphan fairytale',
                'date' => new Carbon('2022-11-24'),
                'description' => '<p>senyawa is an experimental band from java, indonesia, consisting of rully shabara and wukir suryadi. the band was formed in 2010 in yogyakarta.</p></br><p>the band mixes influences from musical and folklore traditions from the indonesian archipelago with experimental music. the band’s neo-tribal sound has been described to mix “punk attitude” with “avant-garde aesthetics”. according to critics, senyawa has “managed to embody the aural flavours of javanese music while exploring the framework of experimental music practice, pushing the boundaries of both traditions” to create a sound that is “thoroughly out of this world.”</p></br><p>shabara provides his extended vocal techniques to senyawa. the band’s lyrics are in various languages of indonesia, including sulawesian, javanese, and indonesian. senyawa’s music is provided by suryadi’s self-built musical instruments made from bamboo and traditional agricultural tools from rural indonesia.</p></br><p>eva van deuren has been wayfaring as orphan fairytale for the past 15 years and counting. with her electronic psychedelia that deftly teeters between the bubbly and the eerie, van deuren is a prolific presence in our spheres and her music is a constant which irrefutably touches and enchants all those who encounter it. over the past few years she has integrated the celtic harp into her repertoire, crafting new sounds that seamlessly meld into the narrative of her unique sonic trajectory.</p>',
                'images' => json_encode(['senyawa1.png', 'senyawa2.png', 'orphan.jpeg']),
                'location' => 'roskot',
                'doors' => '19h30'
            ]),

            $event2 = Event::create([
                'title' => 'pat thomas - seymour wright - paul abbott - chris corsano',
                'date' => new Carbon('2022-11-20'),
                'description' => '<p>pat thomas studied classical piano from aged 8 and started playing jazz from the age of 16. he has since
gone on to develop an utterly unique style - embracing improvisation, jazz and new music. he has played with
derek bailey in company week (1990/91) and in the trio and (with noble) – with tony oxley’s quartet and
celebration orchestra and in duo with lol coxhill.</p></br><p>seymour wright’s work is about the creative, situated friction of learning, ideas, people and the saxophone –
music, history, and technique ­– actual and potential.
his solo work is documented on three widely-acclaimed collections - seymour wright of derby (2008),
seymour writes back (2015) and is this right? (2017).</p></br><p>one of the greatest drummers working today, corsano has developed a percussive language of extraordinary
amplitude and infinite resources. his collaborations stretch from free jazz greats (joe mcphee, paul flaherty
& more) to noise mavens (bill nace, c spencer yeh etc) and pop superstars (björk).</p>',
                'images' => json_encode(['patthomas.png', 'corsano.png']),
                'location' => 'les ateliers claus',
                'doors' => '21h00',
                'additional_category' => 'collaboration',
                'additional_description' => 'this event was organized in collaboration with bozar',
                'additional_link' => 'https://www.bozar.be/en'
            ]),

            $event3 = Event::create([
                'title' => 'karim djaoui',
                'date' => new Carbon('2022-11-20'),
                'date_to' => new Carbon('2022-11-30'),
                'description' => '<p>Artiste autodidacte et pluridisciplinaire, Karim Djaoui travaille depuis plusieurs années le fil sur des supports variés allant de tissus aux photographies anciennes en passant par des cartes géographiques et des papiers recyclés, dans des formats de toutes tailles. Ses œuvres ont notamment été exposées dans l’Espace Vanderborght, au Pianocktail, dans la Librairie Poëtini, chez Pierre Papier Ciseaux, à la Maison Commune suite à une résidence…</p></br><p>Karim Djaoui compte parmi les coups de cœur du Parcours d’artistes de Saint-Gilles 2022 pour sa série de portraits brodés.</p></br><p>Djaoui.karim@gmx.fr</br>0497 87 02 05</br>Insta: @djaouik</br>Facebook : 2kaval</p>',
                'images' => json_encode(['20221103_092411.jpg', '20221103_092708.jpg', '20221103_093020.jpg']),
                'location' => 'les ateliers claus',
                'doors' => ''
            ]),

            $event4 = Event::create([
                'title' => 'cornelis',
                'date' => new Carbon('2022-08-20'),
                'date_to' => new Carbon('2022-11-01'),
                'description' => '<p>De gekste beats.</p>',
                'images' => json_encode(['verschmutzt2_5.png']),
                'location' => 'les ateliers claus',
                'doors' => ''
            ])
        ];

    }
}
