@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @foreach($dossiers as $dossier)

            @if (Auth::user()->id == $dossier->user_id || Auth::user()->is_admin)

            <br/><br/><br/>
                <div class="card border-danger mb-3">
                        <div class="card-header">Votre demande</div>
                        

                        <div class="container">

                                <br/>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">Créer le :</label>
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->created_at}}" disabled="">
                                </fieldset>
                        </div>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">Motif :</label>
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->motif}}" disabled="">
                                </fieldset>
                        </div>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">Comment -vous évalueriez votre santé actuelle :</label>
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->evalue}}" disabled="">
                                </fieldset>
                        </div>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">La dernière fois que vous avez consulté un médecin :</label>
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->dernier}}" disabled="">
                                </fieldset>
                        </div>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">Allergie :</label>
                                  @if($dossier->allergie)
                                  
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->allergie}}" disabled="">
                                
                                  @else

                                  <input class="form-control" id="disabledInput" type="text" placeholder="Aucune" disabled="">

                                  @endif
                                </fieldset>
                        </div>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">Historique medicale (Traitement) :</label>
                                  @if($dossier->hist_trt)
                                  
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->hist_trt}}" disabled="">
                                
                                  @else

                                  <input class="form-control" id="disabledInput" type="text" placeholder="Aucun" disabled="">

                                  @endif
                                </fieldset>
                        </div>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">Historique medicale (Chirurgie) :</label>
                                  @if($dossier->hist_chr)
                                  
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->hist_chr}}" disabled="">
                                
                                  @else

                                  <input class="form-control" id="disabledInput" type="text" placeholder="Aucun" disabled="">

                                  @endif
                                </fieldset>
                        </div>

                        <div class="form-group" style="width=150px !important;">
                                <fieldset disabled="">
                                  <label class="control-label" for="disabledInput">Historique medicale (Familiale) :</label>
                                  @if($dossier->hist_fam)
                                  
                                  <input class="form-control" id="disabledInput" type="text" placeholder="{{$dossier->hist_fam}}" disabled="">
                                
                                  @else

                                  <input class="form-control" id="disabledInput" type="text" placeholder="Aucun" disabled="">

                                  @endif
                                </fieldset>
                        </div>

                            
                        @else

                        <br/><br/>

                        <div class="jumbotron text-center">
                                <h1 class="display-3">Erreur d'ouverture</h1>
                                <p class="lead">Cette operation est non autoriser.</p>
                                <hr class="my-4">
                                <p></p>
                                <p class="lead">
                                  <a class="btn btn-danger btn-lg" href="{{url('dossiers')}}" role="button">Retour</a>
                                </p>
                              </div>
                            
                        @endif


                @endforeach
        
        </div>
    </div>
</div>		

@endsection


