<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function channels()
    {
        return $this->belongsToMany(Channel::class)->withTimestamps();;
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }

    public function creators()
    {
        return $this->belongsToMany(Creator::class);
    }

}
