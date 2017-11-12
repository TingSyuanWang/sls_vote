<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialFacebookAccount extends Model
{
    //
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id', 'provider_user_id', 'provider', 'team1', 'team2', 'team3', 'team4', 'team5', 'team6'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
