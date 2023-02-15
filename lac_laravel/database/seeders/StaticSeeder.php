<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staticcontent = [
            $studio = Content::create([
                'page' => 'in residence',
                'title' => 'studio & concert hall / crickxstraat 15 / brussels',
                'body' => 'our 2 performance spaces can be rented for recording / practicing.

studio
the studio is acoustically treated in order to be as isolated as possible.
No sounds from outside will disturb you once the doors are closed,
and you won&apos;t disturb anyone as long as you don&apos;t play harsh-noise.
It has been designed to have a pretty fair amount of liveness,
but can also be dampened using thick carpet and/or curtains.
IDEAL for recordings.

concert hall
This room is a little more rough than the 1st floor, resulting in a more "living" sound,
which can be significantly lowered with heavy duty curtains made for that purpose.
Fully equipped - this is our main concert room - with powerful sound system / video / lights.
IDEAL for concert rehearsing / theatre / practicing.

rooms
we also have 2 apartments available, in the same building.
check them via airbnb the studio can host up to 2 people, and the duplex up to 5 people.
both apartments are fully equipped with kitchen and bathroom.
https://www.airbnb.be/users/show/231920428

conditions are to be discussed via: info@lesateliersclaus.com

please note that we won&apos;t rent for parties / birthdays / human sacrifices.',
                'images' => json_encode(['06.jpg', '65.jpg'])
            ]),

            $roskot = Content::create([
                'page' => 'in residence',
                'title' => 'roskot / our summer residency / ninovesteenweg 28 / aalst',
                'body' => '',
                'images' => json_encode(['L1088981.jpg', 'L1088969.jpg'])
            ])
        ];
    }
}
