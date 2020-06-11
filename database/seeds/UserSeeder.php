<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //artist
        $role = Role::where('name', 'artist')->first();

        $user = new User();
        $user->name = 'brown';
        $user->email = 'a@gmail.com';
        $user->nickname = 'bees';
        $user->date_of_birth = '1999-02-12';
        $user->organisation_id = 1;
        $user->avatar = 'pics';
        $user->uuid = 2;
        $user->is_active = true;
        $user->password = bcrypt('artists');
        $user->save();
        $user->roles()->attach($role);

        //listener
        // $role = Role::where('name', 'listener')->first();

        // $user = new User();
        // $user->name = 'mussa';
        // $user->email = 'a@gmail.com';
        // $user->nickname = 'bees';
        // $user->date_of_birth = '12-02-1999';
        // $user->organization_id = 1;
        // $user->avatar = 'pics';
        // $user->uuid = 2;
        // $user->is_active = true;
        // $user->password = '';
        // $user->roles()->attach(1);
        // $user->save();


        //admin
        // $role = Role::where('name', 'admin')->first();

        // $user = new User();
        // $user->name = 'Basata';
        // $user->email = 'a@gmail.com';
        // $user->date_of_birth = '12-02-1999';
        // $user->organization_id = 1;
        // $user->avatar = 'profile';
        // $user->uuid = 2;
        // $user->is_active = true;
        // $user->password = '';
        // $user->roles()->attach($role);
        // $user->save();


    }
}
