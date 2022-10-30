<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\PageViewCounter\Traits\HasPageViewCounter;

class forum extends Model
{
    use HasPageViewCounter;
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
