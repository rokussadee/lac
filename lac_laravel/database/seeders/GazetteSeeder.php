<?php

namespace Database\Seeders;

use App\Models\GazetteItem;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GazetteSeeder extends Seeder
{
    /**
     * Run as     *
     * @return void
     */
    public function run()
    {
        $galleryitems = [
            $item1 = GazetteItem::create([
                'title' => 'Gazette #2 by Sacha Eckes',
                'imagepath' => 'lacgaz1.jpeg',
                'description' => '<p>by Sacha Eckes & Les Ateliers Claus November 2014</p><br><a href="http://www.sachaeckes.com"><p>http://www.sachaeckes.com</p></a>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/gazette',
                'publication_date' => new Carbon('2014-11-20')

            ]),
            $item2 = GazetteItem::create([
                'title' => 'Les Ateliers Claus, september 2014',
                'imagepath' => 'lacg8.jpeg',
                'description' => '<p>design, artwork, drawings by Chloé Schuiten</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/final_ateliers_clausrgb-2',
                'publication_date' => new Carbon('2014-09-09')
            ]),
            $item3 = GazetteItem::create([
                'title' => 'Lac Gazette Matthieu Ha',
                'imagepath' => 'lacg2.jpeg',
                'description' => '<p>Lac Gazette Matthieu Ha</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/lac_gazette',
                'publication_date' => new Carbon('2017-04-25')
            ]),
            $item4 = GazetteItem::create([
                'title' => 'salon du sang Neuf #2',
                'imagepath' => 'lacg9.jpeg',
                'description' => '',
                'source' => 'https://issuu.com/lesateliersclaus/docs/sds9',
                'publication_date' => new Carbon('2015-01-20')
            ]),
            $item5 = GazetteItem::create([
                'title' => 'gazette Mo Xia',
                'imagepath' => 'lacg10.jpeg',
                'description' => '<p>gazette Mo Xia pour Les Ateliers Claus,</p><br><p>Février 2015. gazette #3</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/gazette_50cc869cfe6bf5',
                'publication_date' => new Carbon('2015-01-20')
            ]),
            $item6 = GazetteItem::create([
                'title' => 'les ateliers claus gazette by Axel Stevens',
                'imagepath' => 'lacg11.jpeg',
                'description' => '<p>les ateliers claus gazette #4,</p><br><p>September 2015,</p><br><p>by Axel Stevens</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/gazette_ax_white-3',
                'publication_date' => new Carbon('2015-09-07')
            ]),
            $item7 = GazetteItem::create([
                'title' => 'Gazette September 2016',
                'imagepath' => 'lacg12.jpeg',
                'description' => '<p>design by Sarah Yu Zeebroek !! Gazette les ateliers claus,</p><br><p>September 2016</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/gazette_september-2',
                'publication_date' => new Carbon('2016-08-25')
            ]),
            $item7 = GazetteItem::create([
                'title' => 'Nina Vandeweghe for les ateliers claus',
                'imagepath' => 'lacg13.jpeg',
                'description' => '<p>Gazette by Nina Vandeweghe for les ateliers claus 2017</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/claus-nina_los',
                'publication_date' => new Carbon('2017-02-12')
            ]),
            $item8 = GazetteItem::create([
                'title' => 'gazette les ateliers claus',
                'imagepath' => 'lacg3.jpeg',
                'description' => '<p>gazette les ateliers claus,</p><br><p>fall 2017 illustrations by by Nicolas</p><br><p>Zouliamis</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/opmaak_def',
                'publication_date' => new Carbon('2017-08-17')
            ]),
            $item9 = GazetteItem::create([
                'title' => 'Gazette spring 2018',
                'imagepath' => 'lacg6.jpeg',
                'description' => '<p>Gazette spring 2018 by Adèle Gratacos</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/gazette_pour_web',
                'publication_date' => new Carbon('2018-01-15')
            ]),
            $item10 = GazetteItem::create([
                'title' => 'claustrum gazette',
                'imagepath' => 'lacg4.jpeg',
                'description' => '<p>we’re presenting our new project called ‘claustrum’: it’s a new enclosed sound- en concertspace in the shape of a temple dome and build up in recycled/used materials. The inner shape has a geodetical shape and will function as a ambisonic en spatial sound system. The aim is to create a musical entity constructed out of materials of the past to construct a musical experience of the future, wherein an artist and audience can present and experience different forms of ambisonic compositions.</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/claustrum_krantje_a3_hr',
                'publication_date' => new Carbon('2018-05-15')
            ]),
            $item11 = GazetteItem::create([
                'title' => 'Annabelle Guetatra',
                'imagepath' => 'lacg5.jpeg',
                'description' => '<p>Annabelle Guetatra gazette pour les ateliers claus, early 2019</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/annabelleguetatra-logo-date',
                'publication_date' => new Carbon('2019-01-21')
            ]),
            $item11 = GazetteItem::create([
                'title' => 'Priscilla Beccari',
                'imagepath' => 'lacg7.jpeg',
                'description' => '<p>Gazette from les ateliers claus, summer 2019.</p><br><p>All artwork by Priscilla Beccari.</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/lesateliersclaus_krantje_september_lr',
                'publication_date' => new Carbon('2019-08-07')
            ]),
            $item12 = GazetteItem::create([
                'title' => 'Jonas Meier',
                'imagepath' => 'lacg14.jpeg',
                'description' => '<p>Gazette for les ateliers claus - 1st half of 2021 by Jonas Meier.</p><br><p>all photographs were taken in the frenetic, noisy and colorful life of Ballaro, Palermo - during December 2020 by Jonas Meier.</p><br><a href="www.jojojojojo.com"><p>www.jojojojojo.com</p></a><br><a href="www.lesateliersclaus.com"><p>www.lesateliersclaus.com</p></a>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/les-ateliers-claus_gazette-01.2021_web',
                'publication_date' => new Carbon('2021-02-08')
            ]),
            $item13 = GazetteItem::create([
                'title' => 'Sophie Nys',
                'imagepath' => 'lacg15.jpeg',
                'description' => '<p>Gazette for les ateliers claus - summer 2021 - by Sophie Nys.</p><br><p> comes with a soundtrack by Alexis Tronchet - soundcloud.com/effrem-tewodros</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/lesaterliersclaus_final',
                'publication_date' => new Carbon('2021-08-24')
            ]),
            $item14 = GazetteItem::create([
                'title' => 'Gazette Claus by Kristina Nickel',
                'imagepath' => 'lacg16.jpeg',
                'description' => '<p>Gazette Claus by Kristina Nickel - first half 2022 thanks to Heartwork & Graphius</p>',
                'source' => 'https://issuu.com/lesateliersclaus/docs/lac_feb_2022',
                'publication_date' => new Carbon('2022-01-30')
            ]),

        ];
    }
}
