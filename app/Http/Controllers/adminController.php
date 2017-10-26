<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index() {
        $id = 2;
        return view('pages.admin', compact('id'));
    }


    public function createActivity(Request $request)
    {
        $activity = new \App\Activity;
        $activity->titre = $request->input('titre');
        $activity->contenu = $request->input('contenu');
        $activity->slug = $activity->titre;
        $activity->save();
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
