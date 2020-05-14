<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'name' => Str::Random(20),
            'time' => Str::Random(20),
            'artist' => Str::Random(20),
            'plays' => Str::Random(5),
            'album' => Str::Random(15),
            'genre' => Str::Random(15)
        ]);
        factory(App\Song::class, 8)->create();
    }
}
