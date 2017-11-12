<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team1() {
        return view('teams.team1');
    }
}
