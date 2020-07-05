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
    
    }
}
