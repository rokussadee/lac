<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(ResidenceSeeder::class);
        $this->call(StaticSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(GazetteSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(ArtistSeeder::class);
    }
}
