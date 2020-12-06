@extends('layouts.app')

@section('csss')

<style>

.type_msg {
	border-top: 1px solid #c4c4c4;
	position: relative;
}

.msg_send_btn {
	background: #05728f none repeat scroll 0 0;
	border:none;
	border-radius: 50%;
	color: #fff;
	cursor: pointer;
	font-size: 15px;
	height: 33px;
	position: absolute;
	right: 0;
	top: 11px;
	width: 33px;
}

.input_msg_write input {
	background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
	border: medium none;
	color: #4c4c4c;
	font-size: 15px;
	min-height: 48px;
	width: 100%;
	outline:none;
}
</style>
    
@endsection


@section('content')

<div class="container" id="app">
        
    <div class="row">
        
        <div class="col-md-5">

            <div class="card border-success mb-3 " style="margin-top: 30px;">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8"><h3 class="card-title">Fichier</h3></div>
                        <div class="col-md-2 text-right">
                            <button class="btn btn-success" @click="open.fichier = true">Ajouter</button>
                        </div>
                    </div>                     
                </div>
                <div class="card-body text-dark">
                    <div v-if="open.fichier">

                        <div class="form-group">
                            <lable>Le documents</lable>
                            <input type="file" class="form-control" @change="ChangeFile">
                        </div>

                            

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea  rows="3" class="form-control" v-model="fichier.description"></textarea>
                        </div>
                        

                        <button class="btn btn-info btn-block" @click="addFichier" >Ajouter</button>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item"  v-for="fichier in fichiers">
                        <small>@{{ fichier.description }} <br/> <a href="@{{ fichier.lien }}">Voir le fichier</a> </small>
                        </li>
                    </ul>
                </div>
           </div>

        </div>
        <div class="col-md-7">

                <div class="card border-warning mb-3 " style="margin-top: 30px;">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8"><h3 class="card-title">Rendez-vous</h3></div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-success" @click="open.rdv = true">Ajouter</button>
                                
                            </div>
                        </div>                     
                    </div>
                    <div class="card-body text-dark">
                        <div v-if="open.rdv">
                            <div class="form-group">
                                <label for="">Veuillez ajouter la date </label>
                                <input type="date" class="form-control" v-model="rdv.debut">
                            </div>
                            <div class="form-group">
                                    <label for="">Veuillez ajouter l'heure</label>
                                    <input type="time" class="form-control" v-model="rdv.fin">
                            </div>

                            <button class="btn btn-info btn-block" @click="addRdv" >Ajouter</button>

                            
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"  v-for="rdv in rdvs">
                                    <div class="row">
                                            <div class="col-8 col-sm-9">
                                              <h6>Vous avez un rendez-vous le @{{ rdv.debut }} à @{{ rdv.fin }}</h6>
                                            </div>
                                            <div class="col-8 col-sm-2">
                                                <button class="btn btn-warning btn-sm" @click="deleteRdv(rdv)" >Supprimmer</button>
                                            </div>
                                    </div>
                            </li>
                        </ul>
                    </div>
               </div>
        
        </div>
    </div>

    <div class="row">

            <div class="col-md-12">

                    <div class="card border-danger mb-3">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8"><h3 class="card-title">Commentaires</h3></div>
                                <div class="col-md-2 text-right">
                                    <button class="btn btn-success" @click="open.commentaire = true">Ajouter</button>
                                </div>
                            </div>
                        </div>
                                <div class="card-body text-dark">
                                        <div v-if="open.commentaire">

                                                <div class="form-group">
                                                        <label for="">Saisir le commentaire</label>
                                                        <input type="text" class="form-control" v-model="commentaire.contenu" required>
                                                </div>
                                            
                                            <button class="btn btn-info btn-block" @click="addCommentaire" >Envoyez le commetaire</button><br/><br/>
                                        </div>

                                        <ul class="list-group">
                                            <li class="list-group-item"  v-for="commentaire in commentaires">
                                                <div class="row">
                                                <div class="col-8 col-sm-9">
                                                    <h5><span class="badge badge-pill badge-info">@{{ commentaire.user_name }}</span> <span class="badge badge-pill badge-light">@{{ commentaire.created_at }}</span> :  @{{ commentaire.contenu }} </h5>
                                            </div>
                                                    <div class="col-8 col-sm-2">
                                                        <button class="btn btn-warning btn-sm" @click="deleteCommentaire(commentaire)" >Supprimmer</button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                            </div>                     
                        </div>
                        
                   </div>
            
            </div>

    </div>

</div>		

@endsection

@section('javascripts')

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'idAdossier'     => $id,
            'url'       => url('/')

        ]) !!};
    </script>
<script src="{{ asset('js/show.js') }}"></script>

@endsection