<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class NewsletterController extends Controller
{
    public function register() {

        Flashy::message('Activité ajoutée avec succes!');
        return response()->json([
            'output' => 'ok'
        ]);
    }
}
