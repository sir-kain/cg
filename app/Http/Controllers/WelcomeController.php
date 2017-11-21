<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class WelcomeController extends Controller
{
    //
    public function index() {
        // Recuperation de toutes les activités.
        $activities = Activity::all()->sortByDesc('created_at');
        $theActivity = false;
        return view('welcome', compact('activities', 'theActivity'));
    }
}
