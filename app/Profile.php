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

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/ms8eoJg40YdTkmjUumZkW3GgfZK8OYiMMVjGZb3k.png';
        return '/storage/'. $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
