<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = []; // dont check what fields can be fillable
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
