@extends('layouts/app', ['title' => 'Accueil |'])

@section('header')
@include('layouts/partials/_header')
@stop

@section('mainSlider')
@include('layouts/partials/_mainSlider')
@stop

@section('statistiques')
@include('layouts/partials/_statistiques')
@stop

@section('presentation')
@include('layouts/partials/_presentation')
@stop

@section('activites')
@include('/layouts/partials/_activites')
@stop

@section('galeries')
@include('layouts/partials/_galeries')
@stop

@section('actualites')
@include('layouts/partials/_actualites')
@stop

@section('documentations')
 @include('layouts/partials/_documentations')
@stop

@section('pointsFocaux')
@include('layouts/partials/_pointsfocaux')
@stop

@section('partenaires')
@include('/layouts/partials/_partenaires')
@stop


@section('footer')
  @include('layouts/partials/_footer') 
@stop
