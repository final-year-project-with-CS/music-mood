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
            AlbumSeeder::class,
            RoleSeeder::class,
            OrganizationSeeder::class,
            SongSeeder::class,
<<<<<<< HEAD
            UserSeeder::class
=======
            UserSeeder::class,
>>>>>>> a632c4ff6afe9bd28b1ae27f6d32461a362c82ac

        ]);
    }
}
