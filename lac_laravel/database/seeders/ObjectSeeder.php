<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            $object1 => Object::create([
                'title' => 'Coffee Randomize',
                'images' => json_encode(['https://youtu.be/Ar7Tv1FzzCo']),
                'description' => '<p>A new release on les albums claus. Coffee Randomizer, a circuit bent coffee machine spitting out oscillating frequencies instead of black gold. Peter Keene is a british artist living in Brussels, making (sound) installations and other electric sculptures where he explores art, sound and science. Always with his excellent sense of humour.</p><br>
<p>Presentation @ WIELS, 16 SEPTEMBER 2012</p><br><p>
Av. Van Volxemlaan 354, 1170 FOREST</p>',
                'category' => ''
            ]),
        ];
    }
}
