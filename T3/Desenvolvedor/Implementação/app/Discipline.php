<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $fillable = ['name'];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
