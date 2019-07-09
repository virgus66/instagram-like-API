<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class JourneysController extends Controller
{

    public function index()
    {
        $user = auth()->user();

        dd($user->following);

        $journeys = $user->journeys;
        // $journeys = Journey::whereIn('user_id', )
        return view('journeys.index', compact( 'user') );
    }
}
