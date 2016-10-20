<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseClass extends Model
{
    protected $fillable = ['number', 'number_of_students'];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
