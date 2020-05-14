<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
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
       DB::table('songs')->insert(
           [
               'name'=>Str::Random(20),
               'time'=>Str::Random(20),
               'artist'=>Str::Random(20),
               'album'=>Str::Random(20),
               'genre'=>Str::Random(20),
               'play'=>Str::Random(20),

           ]
       );
    //    factory(App\Song::class,8)->create();
    }
}
