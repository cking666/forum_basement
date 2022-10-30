<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Forum;

class ProfileController extends Controller
{
    public function index(User $user){

        $forums = Forum::where('user_id', $user->id)->get();
        return view('profile.index', compact('user','forums'));
    }
}
