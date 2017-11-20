<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activity = new Activity;
        $activityAmodifier = false;
        return view('pages.admin', compact('activity', 'activityAmodifier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $activities = Activity::all();
        $activity = new Activity;
        $activity->titre = $request->input('titre');
        $activity->description = $request->input('description');
        $activity->contenu = $request->input('contenu');
        $activity->slug = $activity->titre;
        $activity->save();
        // Activity::create(['titre' => $request->input('titre'), 'description' => $request->input('description'), 'contenu' => $request->input('contenu'), 'slug' => $activity->titre]);
        if($request->hasFile('images')){
            // dd($request->file('images')->extension());
            $request->file('images')->storeAs('public/upload/activite', $activity->id.'.'.$request->file('images')->extension());
            $activityToUpdate = Activity::find($activity->id);
            $activityToUpdate->media = $activity->id.'.'.$request->file('images')->extension();
            $activityToUpdate->save();
        }
        $theActivity = false;
        // return view('welcome');
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activityAModifier)
    {
        //
        $activityAmodifier = $activityAModifier->first();
        // dd($activityAmodifier);
        $contenu = $activityAmodifier->contenu;
        return view('pages.admin', compact('activityAmodifier', 'contenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
