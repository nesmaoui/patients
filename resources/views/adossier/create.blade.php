@extends('layouts.app')

@section('content')


<div class="container">
        <div class="row">
            <div class="col-md-12">

                <form action="{{ url('adossiers')}}" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
      
                        {{ csrf_field() }}


                        <div class="form-group @if($errors->get('dossier_id')) has-error @endif">
                            <label for=""><legend>Veulliez selectioner <span class="badge badge-info">LA DEMANDE</span> SVP!</legend></label>
                            <div class="form-group">

                                <select  name="dossier_id" class="custom-select form-control" required>
                                    <option selected=""></option>
        
                                        @foreach($dossiers as $dossier)
        
                                            <option value="{{$dossier->id}}">{{$dossier->user->name}} -&nbsp; {{$dossier->motif}}</option>
        
                                        @endforeach       
        
                                </select>

                            </div>

                        </div>

                        <br/>

                        <hr>

                        <div class="form-group @if($errors->get('status')) has-error @endif">
                                <label for=""><legend>Veulliez selectioner <span class="badge badge-info">LE STATUS</span> SVP!</legend></label>
                                <div class="form-group">
    
                                    <select  name="status" class="custom-select form-control" required>
                                        <option selected=""></option>
            
                                                <option value="Pas encore traiter">Pas encore traiter</option> 
                                                <option value="En cours de traitement">En cours de traitement</option>
                                                <option value="Clôturer">Clôturer</option>   
                                                <option value="Fin de traitement">Fin de traitement</option> 
            
                                    </select>
    
                                </div>
    
                            </div>

                            <br/>

                            <hr>

                            <div class="form-group @if($errors->get('motif')) has-error @endif">
                                    <label for=""><legend>Veulliez saisir <span class="badge badge-info">LE MOTIF</span> SVP!</legend></label>
                                    <div class="form-group">
                                            <input type="text" class="form-control" name="motif" id="motif"  placeholder="Saisir votre motif">
                                            <small id="emailHelp" class="form-text text-muted">S'il existe</small>
                                    </div>
                            </div>

                            <br/>

                            <hr>

                        <div class="form-group @if($errors->get('user_id')) has-error @endif">
                            <label for=""><legend>Veulliez selectioner <span class="badge badge-info">LE MEDECIN</span> SVP!</legend></label>

                            <div class="form-group">
                                <select  name="user_id" class="custom-select form-control" required>
                                    <option selected=""></option>

                                        @foreach($users as $user)
                                        @if($user->is_med)

                                            <option value="{{$user->id}}">{{$user->name}}</option>


                                        @endif
                                        @endforeach       

                                </select>
                            </div>

                        </div>

                        <div class="form-group mb-3 col-md-3">
                                <label for=""></label>
                                <input type="submit" class="form-control btn btn-danger" value="Enregistrer">
                        </div>

                    </div> 
                </form>
        </div>
    </div>
</div>


@endsection