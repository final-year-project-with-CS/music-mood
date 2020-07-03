<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'Admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
    

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
