@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">

        <br/><br/><br/>

        <table class="table">

            <head>
                <tr class="table-success">
                    <th>Numero</th>
                    <th>Nom du medecin</th>
                    <th>Nom du patient</th>
                    <th>Date</th>
                    <th>Heure</th>
                </tr>
            </head>

            <body>

                @foreach($rdvs as $rdv)

                <tr>
                    
                    <th> {{ $rdv->id}}</th>
                    <th>{{ $rdv->adossier->user->name }}</th>
                    <th>{{ $rdv->adossier->dossier->user->name }}</th>
                    <th> {{ $rdv->debut}}</th>
                    <th> {{ $rdv->fin}}</th>

                </tr>
                

                @endforeach
            </body>

        </table>
    </div>
</div>

@endsection