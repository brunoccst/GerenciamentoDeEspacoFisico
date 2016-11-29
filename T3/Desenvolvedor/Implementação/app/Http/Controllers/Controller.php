<?php

namespace App\Http\Controllers;

use App\LogActivity;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function log($model, $method)
    {
        LogActivity::create([
            'user_id' => auth()->user()->id,
            'model' => $model,
            'method' => $method
        ]);
    }
}
