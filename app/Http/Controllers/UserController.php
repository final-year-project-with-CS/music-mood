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

    public function getUser($userId)
    {
        $user = User::find($userId);
        if(!$user)
           return response()->json(['error' => 'user not found']);
           return response()->json(['user' => $user]);
    }
}
