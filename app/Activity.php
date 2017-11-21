<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $fillable = ['titre', 'slug', 'description', 'contenu', 'media'];

    // util pour les routes et les url
    public function getRouteKey(){
        return $this->slug;
    }
}
