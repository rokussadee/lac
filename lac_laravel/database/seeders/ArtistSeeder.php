<?php

namespace Database\Seeders;

use App\Helpers\Helper;
use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = [
            $artist1 = Artist::create([
                'title' => 'ec band',
                'slug' => Helper::createSlug('App\Models\Artist', 'ec band')
            ]),
            $artist1->events()->attach([1]),
            $artist1->residences()->attach([1]),
            $artist2 = Artist::create([
                'title' => 'going',
                'slug' => Helper::createSlug('App\Models\Artist', 'going')
            ]),
            $artist2->events()->attach([1]),
            $artist1->residences()->attach([2]),
            $artist3 = Artist::create([
                'title' => 'karim djaoui',
                'slug' => Helper::createSlug('App\Models\Artist', 'karim djaoui')
            ]),
            $artist3->events()->attach([2]),
            $artist4 = Artist::create([
                'title' => 'handle',
                'slug' => Helper::createSlug('App\Models\Artist', 'handle')
            ]),
            $artist4->events()->attach([3]),
            $artist5 = Artist::create([
                'title' => 'nape neck',
                'slug' => Helper::createSlug('App\Models\Artist', 'nape neck')
            ]),
            $artist5->events()->attach([3]),
            $artist6 = Artist::create([
                'title' => 'arashi trio',
                'slug' => Helper::createSlug('App\Models\Artist', 'arashi trio')
            ]),
            $artist6->events()->attach([5]),
            $artist7 = Artist::create([
                'title' => 'amelie dahl trio',
                'slug' => Helper::createSlug('App\Models\Artist', 'amelie dahl trio')
            ]),
            $artist7->events()->attach([5]),
            $artist8 = Artist::create([
                'title' => 'geier aus stahl',
                'slug' => Helper::createSlug('App\Models\Artist', 'geier aus stahl')
            ]),
            $artist8->events()->attach([6]),
            $artist8->residences()->attach([5]),
            $artist9 = Artist::create([
                'title' => 'christope clébard',
                'slug' => Helper::createSlug('App\Models\Artist', 'christope clébard')
            ]),
            $artist9->events()->attach([4]),
            $artist9->albums()->attach([9]),
            $artist9->albums()->attach([44]),
            $artist10 = Artist::create([
                'title' => 'chris imler',
                'slug' => Helper::createSlug('App\Models\Artist', 'chris imler')
            ]),
            $artist10->events()->attach([4]),
            $artist10->residences()->attach([4]),
            $artist11 = Artist::create([
                'title' => 'valentina magaletti',
                'slug' => Helper::createSlug('App\Models\Artist', 'valentina magaletti')
            ]),
            $artist11->events()->attach([8]),
            $artist12 = Artist::create([
                'title' => 'sholto dobie',
                'slug' => Helper::createSlug('App\Models\Artist', 'sholto dobie')
            ]),
            $artist12->events()->attach([8]),
            $artist13 = Artist::create([
                'title' => '9t antiope',
                'slug' => Helper::createSlug('App\Models\Artist', '9t antiope')
            ]),
            $artist13->events()->attach([9]),
            $artist14 = Artist::create([
                'title' => 'rojin sharafi',
                'slug' => Helper::createSlug('App\Models\Artist', 'rojin sharafi')
            ]),
            $artist14->events()->attach([9]),
            $artist15 = Artist::create([
                'title' => 'alto fuero',
                'slug' => Helper::createSlug('App\Models\Artist', 'alto fuero')
            ]),
            $artist14->residences()->attach([3]),
        ];
    }
}
