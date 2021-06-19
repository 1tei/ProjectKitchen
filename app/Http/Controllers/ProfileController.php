<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $Profile = DB::table('Users')->where('users.id', '=', Auth::user()->id)->get();
        return view('profile', compact('Profile'));
    }
}
