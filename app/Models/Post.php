<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function facultyID()
    {
        return $this->belongsTo('App\Models\Faculty', 'id', 'id');
    }
}
