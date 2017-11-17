<?php

namespace App\Http\Controllers;

use App\SocialFacebookAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    public function index() {

        Session::put('links', '/');

        return view('homepage');
    }

    public function team1() {

        $url = $_SERVER['REQUEST_URI']; //returns the current URL
        $parts = explode('/',$url);

        $currentLink = $parts[2];

        Session::put('links', $currentLink);

        $userId = Auth::id();
        $userTeam1 = SocialFacebookAccount::where('user_id', $userId)->pluck('team1')->first();

        $countTeam1 = SocialFacebookAccount::where('team1', '=', 1)->count();

        return view('teams.team1', compact('userTeam1', 'countTeam1'));

    }

    public function team2() {

        $url = $_SERVER['REQUEST_URI']; //returns the current URL
        $parts = explode('/',$url);

        $currentLink = $parts[2];

        Session::put('links', $currentLink);

        $userId = Auth::id();
        $userTeam2 = SocialFacebookAccount::where('user_id', $userId)->pluck('team2')->first();

        $countTeam2 = SocialFacebookAccount::where('team2', '=', 1)->count();

        return view('teams.team2', compact('userTeam2', 'countTeam2'));

    }

    public function team3() {

        $url = $_SERVER['REQUEST_URI']; //returns the current URL
        $parts = explode('/',$url);

        $currentLink = $parts[2];

        Session::put('links', $currentLink);

        $userId = Auth::id();
        $userTeam3 = SocialFacebookAccount::where('user_id', $userId)->pluck('team3')->first();

        $countTeam3 = SocialFacebookAccount::where('team3', '=', 1)->count();

        return view('teams.team3', compact('userTeam3', 'countTeam3'));

    }

    public function team4() {

        $url = $_SERVER['REQUEST_URI']; //returns the current URL
        $parts = explode('/',$url);

        $currentLink = $parts[2];

        Session::put('links', $currentLink);

        $userId = Auth::id();
        $userTeam4 = SocialFacebookAccount::where('user_id', $userId)->pluck('team4')->first();

        $countTeam4 = SocialFacebookAccount::where('team4', '=', 1)->count();

        return view('teams.team4', compact('userTeam4', 'countTeam4'));

    }

    public function team5() {

        $url = $_SERVER['REQUEST_URI']; //returns the current URL
        $parts = explode('/',$url);

        $currentLink = $parts[2];

        Session::put('links', $currentLink);

        $userId = Auth::id();
        $userTeam5 = SocialFacebookAccount::where('user_id', $userId)->pluck('team5')->first();

        $countTeam5 = SocialFacebookAccount::where('team5', '=', 1)->count();

        return view('teams.team5', compact('userTeam5', 'countTeam5'));

    }

    public function team6() {

        $url = $_SERVER['REQUEST_URI']; //returns the current URL
        $parts = explode('/',$url);

        $currentLink = $parts[2];

        Session::put('links', $currentLink);

        $userId = Auth::id();
        $userTeam6 = SocialFacebookAccount::where('user_id', $userId)->pluck('team6')->first();

        $countTeam6 = SocialFacebookAccount::where('team6', '=', 1)->count();

        return view('teams.team6', compact('userTeam6', 'countTeam6'));

    }
}
