<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        // $slug = str_replace(' ', '-', $request->input('titre'));
        // sluguifier le slug ;=)
        $slug = Str::slug($request->input('titre'));

        // ajout
        if (!$request->hasFile('images')) {
            Activity::create(['titre' => $request->input('titre'), 'description' => $request->input('description'), 'contenu' => $request->input('contenu'), 'slug' => $slug]);
        } else {
            $request->file('images')->storeAs('public/upload/activite', $slug.'.'.$request->file('images')->extension());

            Activity::create(['titre' => $request->input('titre'), 'description' => $request->input('description'), 'contenu' => $request->input('contenu'), 'slug' => $slug, 'media' => $slug.'.'.$request->file('images')->extension()]);
        }

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
