<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['starts_at', 'ends_at'];

    public function courseClass()
    {
        return $this->belongsTo(CourseClass::class);
    }

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
