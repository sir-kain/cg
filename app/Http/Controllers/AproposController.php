<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function historique()
    {
        return view('pages.historique');
    }

    public function structuration()
    {
        return view('pages.structuration');
    }

    public function objectifsambition()
    {
        return view('pages.objectifsambitions');
    }
}
