<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
     {
         $organization = Organization::all();
        return response()->json(['organization', $organization]);
    }
}
