<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleryitems = [
            $item1 = GalleryItem::create([
                'title' => 'karim djaoui',
                'images' => json_encode(['20221103_092411.jpg ', '20221103_092708.jpg', '20221103_093020.jpg']),
                'description' => '<p>karim djaoui did an exposition of his embroidered portraits in les ateliers claus</p><br><p>the works are part of the atelier&apos;s permanent collection</p>',
                'category' => 'exposition'
            ]),
            $item2 = GalleryItem::create([
                'title' => 'roskot rooster',
                'images' => json_encode(['L1088981.jpg']),
                'description' => '<p>for roskot&apos;s second edition, a giant rooster was built in the garden</p><br><p>the work is part of roskot&apos;s permanent collection</p>',
                'category' => 'monument'
            ]),
            $item3 = GalleryItem::create([
                'title' => 'Tomaga & Pierre Bastien live at les ateliers claus',
                'images' => json_encode(['26015849403_c55ee6b96c_b.jpg', 'A-3433688-1559379928-1329.jpg']),
                'videos' => json_encode(['5iGQiD2r3O0']),
                'description' => '<p>24th January 2020: Tomaga & Pierre Bastien live at les ateliers claus - by Geert Coppens</p>',
                'category' => 'concert'
            ]),
            $item4 = GalleryItem::create([
                'title' => 'Farida Amadou & Steve Noble at les ateliers claus',
                'images' => json_encode(['Farida Amadou &- (c) Fabio Lugaro.jpg', '62934_artist.jpeg']),
                'videos' => json_encode(['GdoOaY59p1w']),
                'description' => '<p>Farida Amadou & Steve Noble @ les ateliers claus excerpt from their concert on 1st February 2020</p><br><p>filmed by geert coppens</p>',
                'category' => 'concert'
            ]),
            $item5 = GalleryItem::create([
                'title' => 'Eric Copeland - les ateliers claus',
                'images' => json_encode(['f5cf1212453c5cbb8b7aae3052c2e2f7.jpeg']),
                'videos' => json_encode(['sNIw5kBxx2Q']),
                'description' => '<p>Eric Copeland & les ateliers claus at Brasserie Atlas</p><br><p>THU 19 SEP 2019</p><br><p>sound by Christophe Albertijn, images by Geert Coppens</p>',
                'category' => 'concert'
            ]),
            $item6 = GalleryItem::create([
                'title' => 'Thurston Moore Group at les ateliers claus',
                'images' => json_encode(['thurston_moore_group_new.jpg']),
                'videos' => json_encode(['yIWMZhGyXp8']),
                'description' => '<p>9th February 2020, Thurston Moore, Deb Googe, James Sedwards, Jem Doulton & Jon Leidecker with a special SPIRIT COUNSEL concert.</p><br><p>“THURSTON MOORE GROUP ❤︎  LES ATELIERS CLAUS"</p><br><p>images by Geert Coppens - sound/mix by Christophe Albertijn</p>',
                'category' => 'concert'
            ]),
            $item7 = GalleryItem::create([
                'title' => 'Mdou Moctar live at les ateliers claus',
                'images' => json_encode(['mdou-moctar.jpeg']),
                'videos' => json_encode(['Gw5YAg8JORk']),
                'description' => '<p>18th June 2019 - Mdou Moctar live at les ateliers claus - brussels</p><br><p>video by Geert Coppens, sound by Christophe Albertijn</p>',
                'category' => 'concert'
            ]),
            $item8 = GalleryItem::create([
                'title' => 'Keiji Haino at les ateliers claus',
                'images' => json_encode(['keiji_timeouttokyo.jpg']),
                'videos' => json_encode(['fIAxYGwXhrg']),
                'description' => '<p>7th October 2019 - Keiji Haino at les ateliers claus</p><br><p>images by alternative teken, sound by christophe albertijn</p>',
                'category' => 'concert'
            ]),
            $item9 = GalleryItem::create([
                'title' => 'Joao Lobo Trio at les ateliers claus',
                'images' => json_encode(['1630069513-joao-lobo-trio.jpg']),
                'videos' => json_encode(['mrB6nZYP2kU']),
                'description' => '<p>18th June 2019  Joao Lobo Trio - with João Lobo (pt) + Norberto Lobo (pt) + Soet Kempeneer (b) - live at les ateliers claus.</p><br><p>images by geert coppens, sound by christophe albertijn</p>',
                'category' => 'concert'
            ]),

        ];
    }
}
