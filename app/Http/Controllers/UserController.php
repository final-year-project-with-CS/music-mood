<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllusers() 
    {
        $users = User::all();
        foreach($users as $user) {
             $user->roles;
        }
        return response()->json(['users' => $users]);
    }
}
