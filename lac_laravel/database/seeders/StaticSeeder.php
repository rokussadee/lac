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
                'title' => 'studio & concert hall / crickxstraat 16, brussels',
                'body' => '<p>our 2 performance spaces can be rented for recording / practicing.</p></br><h2>studio</h2><p>
the studio is acoustically treated in order to be as isolated as possible. No sounds from outside will disturb you once the doors are closed, and you won&apos;t disturb anyone as long as you don&apos;t play harsh-noise.
</p></br><p>
It has been designed to have a pretty fair amount of liveness, but can also be dampened using thick carpet and/or curtains.</p></br><p>IDEAL for recordings.</p><br><h2>concert hall</h2><p>This room is a little more rough than the 1st floor, resulting in a more "living" sound, which can be significantly lowered with heavy duty curtains made for that purpose.
</p><br><p>Fully equipped - this is our main concert room - with powerful sound system / video / lights.</p><br><p>IDEAL for concert rehearsing / theatre / practicing.</p>
</br><p>les ateliers claus can also be rented for specific events, in such case please get in
touch directly via e-mail.</p></br><p>please note that we won&apos;t rent for parties / birthdays / human sacrifices.</p>',
                'images' => json_encode(['06.png', '65.jpeg'])
            ]),

            $roskot = Content::create([
                'page' => 'in residence',
                'title' => 'roskot / ninovesteenweg 28, aalst',
                'body' => '<p>our 2 performance spaces can be rented for recording / practicing,
check our different spaces to find out more.</p></br><p>
we also have 2 apartments available, in the same building. check them here via airbnb
the studio can host up to 2 people, and the duplex up to 5 people. both apartments are fully
equipped with kitchen and bathroom.</p></br><p>les ateliers claus can also be rented for specific events, in such case please get in
touch directly : info@lesateliersclaus.com</p></br><p>please note that we won’t rent for parties / birthdays / human sacrifices.</p>',
                'images' => json_encode(['L1088981.png', 'L1088969.png'])
            ])
        ];
    }
}
