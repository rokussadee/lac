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
                'category' => 'exposition'
            ]),
            $item3 = GalleryItem::create([
                'title' => 'Tomaga & Pierre Bastien live at les ateliers claus',
                'images' => json_encode(['26015849403_c55ee6b96c_b.jpeg', 'A-3433688-1559379928-1329.jpeg']),
                'videos' => json_encode(['5iGQiD2r3O0']),
                'description' => '<p>Tomaga & Pierre Bastien live at les ateliers claus</p>',
                'category' => 'concert'
            ])

        ];
    }
}
