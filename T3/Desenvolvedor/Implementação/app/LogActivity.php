<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $fillable = ['user_id','model', 'method'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
