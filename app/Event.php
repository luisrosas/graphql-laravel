<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
