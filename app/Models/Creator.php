<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    public $timestamps = false;

    public function titles()
    {
        return $this->belongsToMany(Title::class)->withTimestamps();
    }
}
