<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['number', 'capacity'];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
