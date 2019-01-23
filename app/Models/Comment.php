<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function event()
    {
        return $this->belongsTo('event', 'id_events', 'id');
    }
}