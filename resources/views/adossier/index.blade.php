@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1>La liste de mes dossiers</h1>
           
           <br/><br/><br/><br/>
           <div class="container">
           <div class="row">
           @foreach ($adossiers as $adossier)
           <div class="col-sm-6 col-md-6">
           <div class="card" style="width: 20rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $adossier->dossier->motif}}</h5>
              <h6 class="card-subtitle mb-2 text-muted"><footer class="blockquote-footer"><span class="badge badge-pill badge-info">{{$adossier->dossier->user->name}}</span></footer> &nbsp; {{ $adossier->created_at}}</h6>
              <p class="card-text"><span class="badge badge-pill badge-light">{{ $adossier->user->name}}</span></p>
              @if ($adossier->motif)

              <p class="card-text"><span class="badge badge-success">{{ $adossier->status}} ({{ $adossier->motif}}) </span></p>
                  
              @else

              <p class="card-text"><span class="badge badge-success">{{ $adossier->status}}</span></p>
                  
              @endif
              <form action="{{ url('dossiers/'.$adossier->id)}}" method="post">

                {{ csrf_field() }}
                {{ method_field('DELETE') }} 

                <a href="{{url('adossiers/'.$adossier->id)}}" class="btn btn-outline-secondary">Consulter</a>
                <a href="{{url('adossiers/'.$adossier->id.'/edit')}}" class="btn btn-outline-success">Editer</a>
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