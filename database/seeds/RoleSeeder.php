<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $role = new Role();
       $role->name = "Admin";
       $role->description = "A system adminstrator";
       $role->save();

       $role = new Role();
       $role->name = "artist";
       $role->description = "owner of the song";
       $role->save();

       $role = new Role();
       $role->name = "listener";
       $role->description = "plays songs";
       $role->save();
    }
}
