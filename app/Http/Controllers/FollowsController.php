<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function store(User $user)
    {

        // for meny to many relation you can use attach(), detach(), sync(), syncWithoutDetaching() and toggle() methods
        return auth()->user()->following()->toggle($user->profile);
    }
}