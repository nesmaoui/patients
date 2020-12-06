@extends('layouts.app')

@section('content')


<div class="jumbotron text-center">
        <h1 class="display-3">Erreur d'ouverture</h1>
        <p class="lead">Cette page est non autoriser.</p>
        <hr class="my-4">
        <p></p>
        <p class="lead">
          <a class="btn btn-danger btn-lg" href="{{url('dossiers')}}" role="button">Retour</a>
        </p>
      </div>
    
@endsection