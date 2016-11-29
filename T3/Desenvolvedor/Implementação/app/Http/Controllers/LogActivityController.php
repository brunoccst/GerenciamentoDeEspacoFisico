<?php

namespace App\Http\Controllers;

use App\Discipline;
use App\Http\Requests;
use App\LogActivity;
use DisciplineRepository;

class LogActivityController extends Controller
{
    public function index()
    {
        $logActivities = LogActivity::orderBy('created_at', 'desc')->get();
        return view('logs.list', compact('logActivities'));
    }
}
