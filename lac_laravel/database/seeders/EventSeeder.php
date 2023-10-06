<?php

namespace Database\Seeders;

use App\Helpers\Helper;
use App\Models\Event;
use Carbon\Carbon;
use Golchha21\ReSmushIt\Facades\Optimize;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                'title' => 'EC Band + GOING',
                'slug' => Helper::createSlug('App\Models\Event', 'EC Band + GOING'),
                'date' => new Carbon('2022-12-17'),
                'description' => 'A collaboration between New Yorker Luke Calzonetti (Run Dust, Sugarstick & Xerox, Childabuse) and Limburgian Stijn Wybouw (KRAMP, Kraak records) of transcendental improv overtones. Undulating layers of synth lashings, cymbal echoes, and some laid-back guitar action mesh in a spaced out trip in the physical and astral plane.
A filmic hitchhike to nowhere. Their first LP just came out your way via the great Meakusma avenue.

https://meakusma.bandcamp.com/album/the-ec-band

GOING Is a Belgian based group, had a skeletal line up of 2 drummers, (João Lobo and Mathieu Calleja), and 2 keyboards/synths/ fender rhodes + plenty of electronics (Giovanni Di Domenico and Pak Yan Lau).
The sound that they come up with could be loosely post-rock, but also closely allied to improvised, experimental and minimal music.

Their universe is all about trance, where time is being stretched and transformed in different ways. Electronic sounds weaves textures, while polyrhythmic cells are being laid down, sometimes hard to distinguish who is doing what.
Their music can be described as one big trip, a voyage into today’s urban stellar system.

Due to the leave of one of the members (Mathieu Calleja), Going is researching in this residency for possible new musical directions and guests or/and members. Going invites Manuel Mota, Gaspard Sicx and Giotis Damianidis for some experimentations during this week.

https://goingmusic.bandcamp.com',
                'images' => json_encode(['EC band Bos 2.jpg', 'Image 20-11-2022 at 23.31.jpg', 'Going.jpg', 'Image 20-11-2022 at 23.20.jpg']),
                'location' => '15 rue crickx, brussels',
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/going-ec-band-tickets-469871547447',
                'isActive' => true
            ]),
            $event3 = Event::create([
                'title' => 'karim djaoui',
                'slug' => Helper::createSlug('App\Models\Event', 'karim djaoui'),
                'date' => new Carbon('2022-10-14'),
                'date_to' => new Carbon('2022-12-17'),
                'description' => 'Artiste autodidacte et pluridisciplinaire, Karim Djaoui travaille depuis plusieurs années le fil sur des supports variés allant de tissus aux photographies anciennes en passant par des cartes géographiques et des papiers recyclés, dans des formats de toutes tailles. Ses œuvres ont notamment été exposées dans l’Espace Vanderborght, au Pianocktail, dans la Librairie Poëtini, chez Pierre Papier Ciseaux, à la Maison Commune suite à une résidence…

Karim Djaoui compte parmi les coups de cœur du Parcours d’artistes de Saint-Gilles 2022 pour sa série de portraits brodés.

Djaoui.karim@gmx.fr

0497 87 02 05

Insta : @djaouik

Facebook : 2kaval',
                'images' => json_encode(['20221103_092411.jpg ', '20221103_092708.jpg', '20221103_093020.jpg']),
                'location' => '15 rue crickx, brussels',
                'additional_category' => 'exposition',
                'additional_description' => 'karim djaoui&apos;s works are on display in the les ateliers claus headquarters',
                'isActive' => true
            ]),
            $event4 = Event::create([
                'title' => 'handle // nape neck',
                'slug' => Helper::createSlug('App\Models\Event', 'handle // nape neck'),
                'date' => new Carbon('2023-01-21'),
                'doors' => '20:30',
                'tickets' => 'https://www.eventbrite.be/e/handle-nape-neck-tickets-499847396017',
                'description' => 'HANDLE (UK)

Rhythm-minded clatter and clang from a trio that mutated out of the Manchester band D.U.D.S., whose particular union of scratchy dancefloor funk and taut, minimal post-punk had first been set into motion by late ’70s phonk UK firebrands like A Certain Ratio and early ’80s post-No Wave downtown dwellers like Liquid Liquid. HANDLE clearly shares some of that same genetic material, while operating with a paired down set of tools (bass, drums, keyboard, voice, no guitars) and some adventurous tendencies that give their debut LP a more distinct musical identity. Leo Hermitt’s vocals bounce from punctuated yelps to monotone narrations to abstracted wordless noises, matched by snapping bass throb, mutant disco beats, and washes of warped and feverish synth that collectively add up to something vaguely approaching an all-night, bleary-eyed nightclub version of This Heat. The more linear, sharpened moments amidst the experimental detours here are the ones that have the most immediate impact, like the monotony of modern life commentary “Life’s Work” that twists into a delirious 99 Records-style infinite loop groove with a repetitive chant of “Definition, definition / Useless, useless information” pulling the the underlying rhythm even tighter. New record forthcoming. Maximum agitation!

https://maternalvoice.bandcamp.com/album/in-threes
https://absolutefiction.bandcamp.com/album/handle-demonstrations

NAPE NECK (UK)

Nape Neck’s knotted rhythms and the intersecting/overlapping vocal shouts from all three band members bring to mind Scissor Girls or Erase Errata, who also drew inspiration from the spiky tension of first wave UK post-punk and translated it through the more wild and free tendencies of DNA-descended downtown art-noise.

https://napeneck.bandcamp.com/album/look-alive-ep
https://www.maximumrocknroll.com/band/nape-neck/',
                'images' => json_encode(['handle1.jpg ', 'handle2.jpg', '0018307842_10.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event5 = Event::create([
                'title' => 'christophe clébard (it) + chris imler (berlin)',
                'slug' => Helper::createSlug('App\Models\Event', 'christophe clébard (it) + chris imler (berlin)'),
                'date' => new Carbon('2023-01-28'),
                'doors' => '20:30',
                'tickets' => 'https://www.eventbrite.be/e/christophe-clebard-it-chris-imler-berlin-tickets-510115076927',
                'description' => 'Christophe Clébard is a solo doom-disco-dance-punk project, recalling the punishing groove of Suicide.His music
is undeniably groovy and puts the listener into a trance while his punishing vocal assault sends one on a dark psychic odyssey. Christophe Clébard has been a refreshingly severe addition to the Brussels music scene.
RELEASE SHOW for his new album "IL TRIONFO DELLA MORTE".

https://christopheclebard.bandcamp.com/album/il-trionfo-della-morte
https://christopheclebard.bandcamp.com

Chris Imler is the most unscrupulous, corrupt and fascinating drummer in all of Berlin. He has played in the semi-legendary Golden Showers and The Spankings (with Taylor Savvy). Other references from his CV include: Peaches, Soffy O, Jens Friebe, Electronicat, Namosh, Jim Avignon, etc. Currently. At Les Ateliers Claus he will
perform as a one-man-gang-bang: astray vocals, square bass lines and stuttering ringtones, served with a liberal
dash of German humour. Chris Imler beats his drums for us all.

http://chrisimler.com
https://riolabel.bandcamp.com/album/country-club

Tickets: 10€ + 1.68€ (reserv.) at les ateliers claus - Rue Cricks 13 brussels
https://www.eventbrite.be/e/christophe-clebard-it-chris-imler-berlin-tickets-510115076927

this is a co-production of les ateliers claus and moli del tro',
                'images' => json_encode(['282121870_420468609904344_7406672475833303098_n.jpg', 'Party-for-One-Chris-20000101_0005-Kopie.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event6 = Event::create([
                'title' => 'arashi trio & amelie dahl trio',
                'slug' => Helper::createSlug('App\Models\Event', 'Arashi & Dahl/Dalen/Sovik'),
                'date' => new Carbon('2023-03-09'),
                'doors' => '20:30',
                'tickets' => '',
                'description' => 'arashi trio:
akira sakata
paal nilssen-love
johan berthling
+
amalie dahl trio:
amalie dahl
henrik sandstad dalen
jomar jeppsson søvik

les ateliers claus, ancienne belgique & oorstof
arashi: akira sakata - paal nilssen-love - johan berthling

about ten years ago, a special pact was forged between three prominent figures of free jazz and improvisation resul- ting in arashi. when the famous japanese saxophonist akira sakata encountered the swedish bass player johan berth- ling (fire!) and the norwegian drummer paal nilssen-love (the thing), he found the ideal accomplices for what can now be called one of the most dynamic and energetic trio formations of today.

the extraordinary stamina of the three musicians and the will to push themselves and the music beyond traditional boundries, made their first performance at the molde jazz festival in 2013 a huge success. they translated that a few days later to the studio, where they recorded a modern classic with the album ‘arashi-storm’ (trost records). two years later, the trio released a follow up record, ‘semikujira’, which was also used as a soundtrack. their most recent cd ‘jikan’ was recently released on pnl records. after succesful tours in europa and japan and a series of cancella- tions due to the pandemic, arashi finally embarks on a higly anticipated new series of european concerts.
web:
https://pnlrecords.bandcamp.com/album/jikan
http://www.akira-sakata.com/
https://www.paalnilssen-love.com/
https://johanberthling.com/info/

video:
https://youtu.be/sclq8sa0rek

amalie dahl - henrik sandstad dalen - jomar jeppsson søvik

dahl/dalen/søvik is an improvising trio based in oslo. with backgrounds in free jazz, noise and avantgarde they play music in the tradition of modern free improvisation, inspired by anthony braxton, mette rasmussen, ingebrigt håker flaten etc.

the trio consists of the danish, in norway residing, amalie dahl (dafnie, trondheim jazz orchestra) on alto saxopho- ne, and the norwegian rhythm section of henrik sandstad dalen (passe planta, sex magick wizards) on double bass, and jomar jeppsson søvik (actual music) on drums. all three of them are part of the improvised music scene in oslo. their debut album ‘fairytales for daydreamers’ will be out in march on nice things records. on this live recording from their first performance together, the listener gets to experience the trio’s immediate chemistry through a lively and adventurous 45 minute set. they move confidently through polite introductions, interrogations, deep conversations and heated arguments before at last they reach tender reconciliation, as if they were old friends playing together.

web:
https://soundcloud.com/user-216415831/sets/live-kafe-haerverk-29092022
https://amaliedahl.bandcamp.com/
https://www.nicethingsrecords.com/',
                'images' => json_encode(['Arashi_Trio_04.jpg', '1_Arashi-photo-schindelbeck-DSC00660_2400p_col.jpg', 'R-13426301-1553976706-8429 kopie.jpg', 'Dahl_Dalen_Sovik_C_Dalen.jpg', 'dahl_dalen_Solvik.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event7 = Event::create([
                'title' => 'geier aus stahl',
                'slug' => Helper::createSlug('App\Models\Event', 'geier aus stahl'),
                'date' => new Carbon('2023-02-24'),
                'description' => 'Geier aus Stahl is one of many guises of multi-disciplinary artist Leonard Prochazka. Geier is a figure investigating on destructive power relations, autonomy and questions concerning „the self“. In summer 2022 he released his debut album „Strapazen und Genesung“ (strain and recovery) on the dutch label Knekelhuis which was named unmistakable throwback record with influences from the top tier of cold wave electronics, industrial and vintage electro-pop. (Boomkat) For a tour in spring of 2023 the project is undergoing a process of transformation to appear in a band formation for the very first time consisting of Paul Ebhart (electronix), Hannah Todt (guitar, bass) and Leonard Prochazka (drums, voice).

Bandcamp: https://bit.ly/3iLvnQO
Soundcloud: https://bit.ly/3UATVJD
Spotify: https://spoti.fi/3uQ0gXr

images by Marysia Swietlicka
https://marysia-swietlicka.com/',
                'images' => json_encode(['MarysiaSwietlicka_geierausstahl.jpg', '0028786004_10.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event8 = Event::create([
                'title' => 'label record fair at les ateliers claus',
                'slug' => Helper::createSlug('App\Models\Event', 'label record fair at les ateliers claus'),
                'date' => new Carbon('2023-02-04'),
                'doors' => '14:00',
                'description' => '
                Saturday 4.02.23 - With dj&apos;s from 2pm until 8pm.

                A record fair / label market with Knotwilg, Futura Resistenza, Rebel Up, Okraïna , By the Bluest of the Sea, Attila Tralala, Dropa Disc, Swallowing Helmets, GNiGNiGNiGNi, el NEGOCITO Records, Silent Waters, les albums claus and more......

                Bar is open.

                FREE ENTRANCE',
                'images' => json_encode(['LABELFAIRRECORD final.jpg', 'FransDeSlijper.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event9 = Event::create([
                'title' => 'iv iii: valentina magaletti + sholto dobie',
                'slug' => Helper::createSlug('App\Models\Event', 'iv iii: valentina magaletti + sholto dobie'),
                'date' => new Carbon('2023-02-18'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/iv-iii-valentina-magaletti-sholto-dobie-tickets-524332250877',
                'description' => '
                Valentina Magaletti is a drummer-composer and multi-instrumentalist with an inventive approach to drums and percussion. Her versatile technique, which can incorporate anything from vibes and marimba to contact microphones and found objects, results in a style that is forever evolving. Feeling just as comfortable performing behind a delicate ceramic kit as she does hammering out motorik rhythms, her creative take on percussion has resulted in a diverse discography and many interesting collaborations.

As a drummer, Magaletti moves effortlessly between the seemingly disparate worlds of alternative and mainstream music. She has played with artists such as Pat Thomas, Deb Googe, Thurston Moore, Lafawndah, Nist-Nah Ensemble, Charles Hayward, Mica Levi, Kamasi Washington, and Nicolas Jaar to name a few.

Magaletti’s compositional credits are just as elaborate: with Tom Relleen, she was one half of Tomaga, the critically acclaimed electronic duo; with Al Wootton, she creates irresistible claustrophobic dub as Holy Tongue; with Pino Montecalvo, under the Avvitagalli alias, Valentina improvises intricate sonic collages; alongside percussionist João Pais Filipe, as CZN, she constructs hallucinatory rhythmic worlds, which are as fragile as they are eternal.

Perhaps her most accessible project is Vanishing Twin, the trio with Cathy Lucas and Susumu Mukai aka Zongamin, that explores the spaces bridging jazz and psychedelia. Following the impulse to explore uncharted territories, Magaletti teamed up with production duo Raime. Christening the project Moin, the trio created Moot! for Nic Tasker’s AD 93 label in 2021.

Valentina has performed or composed music released on labels including Editions Mego, Trilogy Tapes, Offen,Takuroku, Marionette,Hands in the Dark, Blank Editions, Confront,Latency, Horn of Plenty, Meakusma, Emotional Response, Other People, Soundway, Fire Records and many more.

https://valentinamagaletti.bandcamp.com/album/a-queer-anthology-of-drums?fbclid=IwAR0s4VdYrm4ic1W_usEtS97K935JbVW4js1Yrg6gkmQJHrZEY9m151lKKyg
https://valentinamagaletti.bandcamp.com/album/rotta
https://valentinamagaletti.bandcamp.com/album/due-matte

Sholto Dobie was born in Edinburgh and lives in Vilnius. He uses loose structures and an array of sound-sources including home-made organs and hurdy gurdy. His performances are personal and intuitive, often coming across as delicate, evocative, and absurd.

He has recorded and performed with artists and musicians including Rie Nakajima, Judith Hamann, Lia Mazzari, Shakeeb Abu Hamdan, Mark Harwood, Marja Ahti & Niko Mahti Ahti, Antonina Nowacka, Malvern Brume and Lucia Nimcova. He has released solo and collaborative music with labels such as Mappa, Infant Tree, Takuroku. Penultimate Press and Thanet Tape Centre and has toured widely, presenting performances at Cafe Oto (London), Fylkingen (Stockholm), De Player (Rotterdam), KM28 (Berlin), Kraak Festival (Antwerp), Organ Sound Art Festival (Copenhagen), Jauna Muzika Festival (Vilnius), Counterflows Festival (Glasgow) and Glasgow International (Glasgow).

https://thanettapecentre.bandcamp.com/album/nevery
https://themarkharwood.bandcamp.com/album/the-blue-horse
https://mappa.bandcamp.com/album/dilo',
                'images' => json_encode(['0029294471_10.jpg', 'L1083789.jpg', 'SholtoDobie_1.jpg', '327435469_1412241669314863_6587987336117517872_n.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),
            $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]), $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]), $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]), $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]), $event10 = Event::create([
                'title' => 'an evening of iranian electronic music: 9t antiope + rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Event', 'an evening of iranian electronic music: 9t antiope + rojin sharafi'),
                'date' => new Carbon('2023-03-04'),
                'doors' => '20:00',
                'tickets' => 'https://www.eventbrite.be/e/9t-antiope-iran-rojin-sharafi-iran-tickets-525496733877',
                'description' => '
                9T Antiope, derived from 90 Antiope double-asteroid in the Solar System between Mars and Jupiter, is a duo of Paris based-Iranian musicians Nima Aghiani and Sara Bigdeli Shamloo. Focussed on experimental music using layers of acoustic instruments, electronics and combining them with vocals and lyrics, in order to narrate tiny bits or huge landscapes of the chaotic worlds they envision. Their music expresses bleak feelings, inspired by the unrelentingly “brutal, unjust and angry” state of the world, and often takes unpredictable turns around sharp corners into darker, noisier passages.

They have released music on reputed labels such as PTP (Purple Tape Pedigree), Eilean Rec., Hallow Ground, Flaming Pines, Unperceived Records and an upcoming project on American Dreams
"Whatever it might mean, it is absolutely gripping, immersive and surrealistic, cinema without sight." Philip Sherborne – Pitchfork
“A sort of sonic thought experiment, as cerebral as it is visceral” The Wire

www.9tantiope.com
https://purpletapepedigree.bandcamp.com/album/placebo
https://eileanrec.bandcamp.com/album/grima


Rojin Sharafi is Vienna-based, Tehran-born artist that draws on cinematic and literary influences in her acoustic, electro-acoustic, and electronic music. She creates entirely unique musical textures through the use of analogue, and augmented instruments and sometimes acoustic instruments like the santur and piano. Her songs blend noise, folk, ambient, metal, and contemporary music with layers of narrative to produced “engineered chaos”. Sounds stretch and reverberate as her songs fiddle with temporal and structural restrictions.

Sharafi has been part of the line-up at international festivals such as SET x CTM 2018 (Tehran), Unsafe + Sounds 2018 (Vienna), Hyperreality 2019 (Vienna), Wiener Festwochen 2020 (Vienna) and released on labels such as Zabte Sote and Ventil records

“Sharafi plays by no known rules and sculpts by no known methods” Tristan Bath, The Quietus
“Sharafi is one of the many Iranian composer…exploring the outer limits of electronic music” Bandcamp Daily

www.rojinsharafi.com
https://rojinsharafi.bandcamp.com/album/kariz
https://zabtesote.bandcamp.com/album/zangaar
https://zabtesote.bandcamp.com/album/urns-waiting-to-be-fed',
                'images' => json_encode(['EventCoverPhoto.jpg', '9T-Antiope-1170x780.jpg']),
                'location' => '15 rue crickx, brussels',
                'isActive' => true
            ]),

//             geier aus stahl is one of many guises of multi-disciplinary artist leonard prochazka. geier is a figure investigating on destructive power relations, autonomy and questions concerning „the self“. in summer 2022 he released his debut album „strapazen und genesung“ (strain and recovery) on the dutch label knekelhuis which was named unmistakable throwback record with influences from the top tier of cold wave electronics, industrial and vintage electro-pop. (boomkat) for a tour in spring of 2023 the project is undergoing a process of transformation to appear in a band formation for the very first time consisting of paul ebhart (electronix), hannah todt (guitar, bass) and leonard prochazka (drums, voice).“
//bandcamp: https://bit.ly/3ilvnqosoundcloud: https://bit.ly/3uatvjd
//spotify: https://spoti.fi/3uq0gxr
        ];

    }
}
