<?php

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
        $this->call([
            // AlbumSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            // OrganizationSeeder::class,
            // SongSeeder::class,
            
        ]);
    }
}
