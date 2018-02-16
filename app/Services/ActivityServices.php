<?php

namespace App\Services;

use App\Activity;

class ActivityServices {
    public function getAllActivities(){
        return Activity::all();
    }
}