<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index() {
        $id = 0;
        $activities = \App\Activity::get();
        // dd($activities);
        $theActivity = false;
        return view('welcome', compact('id', 'activities', 'theActivity'));
    }
}
