<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $guarded = []; // disabling mass assignment as data were validated in ProfilesController@update

    public function user() 
    {
        // relationship for the User Model
        return $this->belongsTo(User::class);
    }
}
