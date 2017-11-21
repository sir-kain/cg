<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Services\ActivityServices;

class WelcomeController extends Controller
{
    //
    public function index() {
        // Recuperation de toutes les activités en utilisant le service
        $activityServices = new ActivityServices();
        $activities = $activityServices->getAllActivities()->sortByDesc('created_at');
        $theActivity = false;
        return view('welcome', compact('activities', 'theActivity'));
    }
}
