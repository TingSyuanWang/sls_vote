<?php

namespace App\Http\Controllers;

use App\SocialFacebookAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VoteController extends Controller
{

    public function voteTeam1()
    {
        $userId = Auth::id();
        if ($userId === null) {
            return redirect('/team1');
        } else {
            $user = SocialFacebookAccount::where('user_id', $userId)->first();
            $user->update(['team1' => true]);
            return redirect('/team1');
        }
    }

    public function voteTeam2()
    {
        $userId = Auth::id();
        if ($userId === null) {
            return redirect('/team2');
        } else {
            $user = SocialFacebookAccount::where('user_id', $userId)->first();
            $user->update(['team2' => true]);
            return redirect('/team2');
        }
    }

    public function voteTeam3()
    {
        $userId = Auth::id();
        if ($userId === null) {
            return redirect('/team3');
        } else {
            $user = SocialFacebookAccount::where('user_id', $userId)->first();
            $user->update(['team3' => true]);
            return redirect('/team3');
        }
    }

    public function voteTeam4()
    {
        $userId = Auth::id();
        if ($userId === null) {
            return redirect('/team4');
        } else {
            $user = SocialFacebookAccount::where('user_id', $userId)->first();
            $user->update(['team4' => true]);
            return redirect('/team4');
        }
    }

    public function voteTeam5()
    {
        $userId = Auth::id();
        if ($userId === null) {
            return redirect('/team5');
        } else {
            $user = SocialFacebookAccount::where('user_id', $userId)->first();
            $user->update(['team5' => true]);
            return redirect('/team5');
        }
    }

    public function voteTeam6()
    {
        $userId = Auth::id();
        if ($userId === null) {
            return redirect('/team6');
        } else {
            $user = SocialFacebookAccount::where('user_id', $userId)->first();
            $user->update(['team6' => true]);
            return redirect('/team6');
        }
    }
}
