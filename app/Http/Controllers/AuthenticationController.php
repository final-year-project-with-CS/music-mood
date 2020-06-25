<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(Request $request) 
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if($validator->fails())
        return response()->json($validator->error(), 401);

        $user = new User([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$token = $this->guide()->login($user)) {
            return response()->json(['error' => ['Unauthorized']]);
        }

        return $this->respondWithToken($token);
    }

    public function register()
    {
        
    }

    public function logout()
{
     $this->guard()->logout();

        return response()->json(['message' => 'Successfully logout ']);
}



}
