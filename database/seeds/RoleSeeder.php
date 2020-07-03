<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Psy\Util\Str;
use App\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $role = Role::create(['name' => 'Admin']);
        $role = Role::create(['name' => 'Artist']);
        $role = Role::create(['name' => 'Listener']);

        $user = User::find(1);

        $user->assignRole('Admin');


    }
}   
