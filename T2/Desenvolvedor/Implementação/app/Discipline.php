<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $fillable = ['name', 'starts_at', 'ends_at'];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
