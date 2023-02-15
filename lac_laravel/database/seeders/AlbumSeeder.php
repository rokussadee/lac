<?php

namespace Database\Seeders;

use App\Models\Album;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            $item1 = Album::create([
                'title' => 'Peter Fengler – 3rd Generation AR',
                'imagepath' => 'a2179381308_10.jpg',
                'release_date' => new Carbon('2011-12-01'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/3rd-generation-ar'
            ]),
            $item2 = Album::create([
                'title' => 'Matthieu Ha - Riorim',
                'imagepath' => 'a0608701933_16.jpeg',
                'release_date' => new Carbon('2014-09-28'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/matthieu-ha-riorim'
            ]),
            $item3 = Album::create([
                'title' => 'Chris Corsano & Pak Yan Lau – asbestos and little rain',
                'imagepath' => 'a1114862207_16.jpeg',
                'release_date' => new Carbon('2015-11-30'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/asbestos-and-little-rain'
            ]),
            $item4 = Album::create([
                'title' => 'Shetahr - first date',
                'imagepath' => 'a0597454034_16.jpeg',
                'release_date' => new Carbon('2015-04-14'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/shetahr-first-date'
            ]),
            $item5 = Album::create([
                'title' => 'Kanker Kommando – Live at V2 Factory',
                'imagepath' => 'a2362467095_16.jpeg',
                'release_date' => new Carbon('2017-08-2'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/live-at-v2-factory'
            ]),
            $item6 = Album::create([
                'title' => 'Ilill - Kotkiem',
                'imagepath' => 'a3327621767_16.jpeg',
                'release_date' => new Carbon('2017-08-22'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/kotkiem'
            ]),
            $item7 = Album::create([
                'title' => 'Les Mutants Maha - Bakuhatsu',
                'imagepath' => 'a2715536361_16.jpeg',
                'release_date' => new Carbon('2017-09-14'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/bakuhatsu'
            ]),
            $item8 = Album::create([
                'title' => 'various - Imaginary Game Soundtrack',
                'imagepath' => 'a1475457583_16.jpeg',
                'release_date' => new Carbon('2017-12-01'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/imaginary-game-soundtrack'
            ]),
            $item9 = Album::create([
                'title' => 'Christophe Clébard - Honte',
                'imagepath' => 'a0431634574_16.jpeg',
                'release_date' => new Carbon('2019-09-03'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/christophe-cl-bard-honte'
            ]),
            $item10 = Album::create([
                'title' => 'Dntel - Hate In My Heart',
                'imagepath' => 'a3495377778_16.jpeg',
                'release_date' => new Carbon('2019-10-01'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/dntel-hate-in-my-heart'
            ]),
            $item11 = Album::create([
                'title' => 'Caroline Profanter - GeistermusiG',
                'imagepath' => 'a4115720258_16.jpeg',
                'release_date' => new Carbon('2019-10-31'),
                'source' => 'https://carolineprofanter.bandcamp.com/album/caroline-profanter-geistermusig?label=1251102129&tab=music'
            ]),
            $item12 = Album::create([
                'title' => 'João Lobo - Simorgh',
                'imagepath' => 'a1360512070_16.jpeg',
                'release_date' => new Carbon('2020-12-07'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/simorgh'
            ]),
            $item13 = Album::create([
                'title' => 'Michael Chapman - live ateliers claus',
                'imagepath' => 'a4293291086_16.jpeg',
                'release_date' => new Carbon('2020-12-11'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/michael-chapman-live-ateliers-claus'
            ]),
            $item14 = Album::create([
                'title' => 'Ignatz - live ateliers claus',
                'imagepath' => 'a0555223639_16.jpeg',
                'release_date' => new Carbon('2020-12-11'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/ignatz-live-ateliers-claus'
            ]),
            $item15 = Album::create([
                'title' => 'Atsuko Hatano - live ateliers claus',
                'imagepath' => 'a2726156483_16.jpeg',
                'release_date' => new Carbon('2020-12-11'),
                'source' => 'https://atsukohatano.bandcamp.com/album/atsuko-hatano-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item16 = Album::create([
                'title' => 'Keiji Haino - live ateliers claus',
                'imagepath' => 'a2677377650_16.jpeg',
                'release_date' => new Carbon('2020-12-14'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/keiji-haino-live-ateliers-claus'
            ]),
            $item17 = Album::create([
                'title' => 'Sugai Ken - live ateliers claus',
                'imagepath' => 'a3615099646_16.jpeg',
                'release_date' => new Carbon('2021-01-17'),
                'source' => 'https://sugaiken.bandcamp.com/album/sugai-ken-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item18 = Album::create([
                'title' => 'Will Guthrie - live ateliers claus',
                'imagepath' => 'a2867002110_16.jpeg',
                'release_date' => new Carbon('2021-01-18'),
                'source' => 'https://willguthrie.bandcamp.com/album/will-guthrie-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item19 = Album::create([
                'title' => 'Bitchin Bajas - live ateliers claus',
                'imagepath' => 'a1705816179_16.jpeg',
                'release_date' => new Carbon('2021-01-19'),
                'source' => 'https://bitchinbajas.bandcamp.com/album/bitchin-bajas-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item20 = Album::create([
                'title' => 'Native Instrument - live ateliers claus',
                'imagepath' => 'a0874249984_16.jpeg',
                'release_date' => new Carbon('2021-01-22'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/native-instrument-live-ateliers-claus'
            ]),
            $item21 = Album::create([
                'title' => 'Native Instrument - live ateliers claus',
                'imagepath' => 'a2935981697_16.jpeg',
                'release_date' => new Carbon('2021-01-25'),
                'source' => 'https://ihearu.bandcamp.com/album/ga-l-segalen-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item22 = Album::create([
                'title' => 'Han Bennink & Roland - live ateliers claus',
                'imagepath' => 'a1900571075_16.jpeg',
                'release_date' => new Carbon('2021-01-25'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/han-bennink-roland-live-ateliers-claus'
            ]),
            $item23 = Album::create([
                'title' => 'Le fruit vert - live ateliers claus',
                'imagepath' => 'a3576958626_16.jpeg',
                'release_date' => new Carbon('2021-02-02'),
                'source' => 'https://lefruitvert.bandcamp.com/album/le-fruit-vert-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item24 = Album::create([
                'title' => 'Senyawa - Alkisah',
                'imagepath' => 'a1327781371_16.jpeg',
                'release_date' => new Carbon('2021-02-19'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/alkisah'
            ]),
            $item25 = Album::create([
                'title' => 'Beatriz Ferreyra - live ateliers claus',
                'imagepath' => 'a0689229806_16.jpeg',
                'release_date' => new Carbon('2021-02-23'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/beatriz-ferreyra-live-ateliers-claus'
            ]),
            $item26 = Album::create([
                'title' => 'Michael Hurley - live ateliers claus',
                'imagepath' => 'a4037667716_16.jpeg',
                'release_date' => new Carbon('2021-02-24'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/michael-hurley-live-ateliers-claus'
            ]),
            $item27 = Album::create([
                'title' => 'Akio Suzuki & Aki Onda - live ateliers claus',
                'imagepath' => 'a0196207521_16.jpeg',
                'release_date' => new Carbon('2021-03-03'),
                'source' => 'https://akionda.bandcamp.com/album/akio-suzuki-aki-onda-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item28 = Album::create([
                'title' => 'William Parker - live ateliers claus',
                'imagepath' => 'a1408944221_16.jpeg',
                'release_date' => new Carbon('2021-03-09'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/william-parker-live-ateliers-claus'
            ]),
            $item29 = Album::create([
                'title' => 'Senyawa - Alkisah REMIXED',
                'imagepath' => 'a3991454581_16.jpeg',
                'release_date' => new Carbon('2021-03-25'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/senyawa-alkisah-remixed'
            ]),
            $item30 = Album::create([
                'title' => 'Dntel - The Seas Trees See',
                'imagepath' => 'a1123835985_16.jpeg',
                'release_date' => new Carbon('2021-03-26'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/dntel-the-seas-trees-see'
            ]),
            $item31 = Album::create([
                'title' => 'David Rosenboom - live ateliers claus',
                'imagepath' => 'a0089246447_16.jpeg',
                'release_date' => new Carbon('2021-04-02'),
                'source' => 'https://davidrosenboom.bandcamp.com/album/live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item32 = Album::create([
                'title' => 'Razen - live ateliers claus',
                'imagepath' => 'a0264022608_16.jpeg',
                'release_date' => new Carbon('2021-04-27'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/razen-live-ateliers-claus'
            ]),
            $item33 = Album::create([
                'title' => 'Roxane Métayer - live ateliers claus',
                'imagepath' => 'a2728732992_16.jpeg',
                'release_date' => new Carbon('2021-05-19'),
                'source' => 'https://roxanemetayer.bandcamp.com/album/live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item34 = Album::create([
                'title' => '75 Dollar Bill - live ateliers claus',
                'imagepath' => 'a0844842634_16.jpeg',
                'release_date' => new Carbon('2021-05-26'),
                'source' => 'https://75dollarbill.bandcamp.com/album/live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item35 = Album::create([
                'title' => 'Tomaga & Pierre Bastien - live ateliers claus',
                'imagepath' => 'a3906676252_16.jpeg',
                'release_date' => new Carbon('2021-06-02'),
                'source' => 'https://tomaga.bandcamp.com/album/tomaga-pierre-bastien-live-ateliers-claus?label=1251102129&tab=music'
            ]),
            $item36 = Album::create([
                'title' => 'oyamao - Bruxelles',
                'imagepath' => 'a2973550421_16.jpeg',
                'release_date' => new Carbon('2021-09-02'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/bruxelles'
            ]),
            $item37 = Album::create([
                'title' => 'Dntel - Away',
                'imagepath' => 'a0480182480_16.jpeg',
                'release_date' => new Carbon('2021-09-03'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/dntel-away'
            ]),
            $item38 = Album::create([
                'title' => 'Myriam Gendron : Ma délire - Songs of love, lost & found',
                'imagepath' => 'a2834175711_16.jpeg',
                'release_date' => new Carbon('2021-10-01'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/myriam-gendron-ma-d-lire-songs-of-love-lost-found'
            ]),
            $item38 = Album::create([
                'title' => 'L. Jacobs - Enthusiasm',
                'imagepath' => 'a3400756092_16.jpeg',
                'release_date' => new Carbon('2021-11-12'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/l-jacobs-enthusiasm'
            ]),
            $item39 = Album::create([
                'title' => 'Sana Shenai - Warm Former',
                'imagepath' => 'a0127794884_16.jpeg',
                'release_date' => new Carbon('2022-01-01'),
                'source' => 'https://sanashenai.bandcamp.com/album/warm-former?label=1251102129&tab=music'
            ]),
            $item40 = Album::create([
                'title' => 'Trains & Tracks',
                'imagepath' => 'a0399765681_16.jpeg',
                'release_date' => new Carbon('2022-03-29'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/trains-tracks'
            ]),
            $item41 = Album::create([
                'title' => 'Eric Copeland - Spiral Stairs',
                'imagepath' => 'a2202179192_16.jpeg',
                'release_date' => new Carbon('2022-05-09'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/spiral-stairs'
            ]),
            $item42 = Album::create([
                'title' => 'Humbros - Druidarium',
                'imagepath' => 'a2214039260_16.jpeg',
                'release_date' => new Carbon('2022-08-31'),
                'source' => 'https://lesalbumsclaus.bandcamp.com/album/druidarium'
            ]),
            $item43 = Album::create([
                'title' => 'Cristophe Clébard - Il Trionfo Della Morte',
                'imagepath' => 'a0920495620_16.jpeg',
                'release_date' => new Carbon('2022-11-01'),
                'source' => 'https://christopheclebard.bandcamp.com/album/il-trionfo-della-morte?label=1251102129&tab=music'
            ]),
        ];
    }
}
