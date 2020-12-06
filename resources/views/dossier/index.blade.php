@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1>La liste de mes demandes</h1>
           <div class="float-right">
                <a href="{{url('dossiers/create')}}" class="btn btn-outline-info">Nouvelle demande</a>
           </div>
           <br/><br/><br/><br/>
           <div class="container">
           <div class="row">
           @foreach ($dossiers as $dossier)
           <div class="col-sm-6 col-md-6">
           <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $dossier->motif}}</h5>
              <h6 class="card-subtitle mb-2 text-muted"><footer class="blockquote-footer">{{$dossier->user->name}}</footer> &nbsp; {{ $dossier->created_at}}</h6>
              <p class="card-text">{{ $dossier->evuale}}</p>
              <form action="{{ url('dossiers/'.$dossier->id)}}" method="post">

                {{ csrf_field() }}
                {{ method_field('DELETE') }} 

                <a href="{{url('dossiers/'.$dossier->id)}}" class="btn btn-outline-secondary">Details</a>
                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
        
               </form>
            </div>
            </div>
            <br/>
          </div>
          @endforeach
        </div>
    </div>
           
           
        
    </div>
</div>
    
@endsection