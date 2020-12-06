@extends('layouts.app')

@section('content')

<br>
<br>
<br>

<div class="container">
    @if (Auth::user()->is_admin ==1)

        <div class="row">
          <div class="col-sm-7">
              <div class="card text-white bg-warning mb-3">
                  <div class="card-body">
                    <h4 class="card-title">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-users fa-2x"></i>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gestion des utilisateurs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                    <p class="card-text"><br/><br/>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                         <a href="{{url('users/create')}}" class="btn btn-primary"> <i class="fas fa-user-plus"></i> &nbsp;&nbsp; Créer un nouveau utilisateur</a>
                         <a href="{{url('/users')}}" class="btn btn-primary"> <i class="far fa-user"></i> &nbsp;&nbsp; Afficher la liste des utilisateurs</a>
                      </p>
                  </div>
                </div>
          </div>
          <div class="col-sm-5">
              <div class="card text-white bg-info mb-3">
                  <div class="card-body">
                    <h4 class="card-title">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-calendar-week fa-2x"></i>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gestion des rendez-vous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                    <p class="card-text"><br/><br/>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                         <a href="{{url('/rendez-vous')}}" class="btn btn-primary"> <i class="far fa-clock"></i> &nbsp;&nbsp; Afficher les rendez-vous</a>
                         </p>
                  </div>
                </div>
          </div>
        </div>
        
        
    @endif
        
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-6">
        <div class="card text-white bg-dark mb-3">
          <div class="card-body">
            <h4 class="card-title">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-file-medical-alt fa-2x"></i></i>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Créer une nouvelle demande &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            <p class="card-text">Soumettez votre demande de deuxième opinion médicale à notre groupe de médecins
                spécialistes et recevez un rapport de deuxième opinion contenant une évaluation de votre
                 état de santé en quelques jours seulement. 
                 <br/><br/>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                 <a href="{{url('dossiers/create')}}" class="btn btn-primary"> Démarrer >> </a>
              </p>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-6">
        <div class="card text-white bg-success mb-3">
          <div class="card-body">
            <h4 class="card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-clipboard fa-2x"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suivre l'etat de votre demande</h4>
            <p class="card-text"><br/>Vous avez la possiblite de suivre l'etat d'avancement de vos demandes
              <br/>
              <br/>
              <br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="{{url('dossiers')}}" class="btn btn-primary"> Suivre >> </a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

        @if (Auth::user()->is_admin ==1)

      <div class="col-6 col-sm-12">
        <div class="card text-white bg-danger mb-3">
          <div class="card-body">
            <h4 class="card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-notes-medical fa-2x"></i>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Suivre vos dossiers médicaux
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>

            <p class="card-text">Prenez le contrôle de votre profil de santé.
                Stockez en toute sécurité vos informations médicales et vos dossiers médicaux.
                 En quelques étapes seulement, partagez vos dossiers et discutez avec vos médecins.
                <br/>
                <br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{url('adossiers/create')}}" class="btn btn-primary"> <i class="fas fa-plus-circle"></i> Créer un dossier </a>
              <a href="{{url('adossiers')}}" class="btn btn-primary"> Consulter >> </a>
                </p>

          </div>
        </div>
      </div>
          
      @else

      <div class="col-6 col-sm-12">
          <div class="card text-white bg-danger mb-3">
            <div class="card-body">
              <h4 class="card-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-notes-medical fa-2x"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Suivre vos dossiers médicaux
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
  
              <p class="card-text">Prenez le contrôle de votre profil de santé.
                  Stockez en toute sécurité vos informations médicales et vos dossiers médicaux.
                   En quelques étapes seulement, partagez vos dossiers et discutez avec vos médecins.
                  <br/>
                  <br/>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{url('adossiers')}}" class="btn btn-primary"> Consulter >> </a>
                  </p>
  
            </div>
          </div>
          
      @endif
    </div>
  </div>



@endsection
