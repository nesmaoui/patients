@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">

        <form action="{{ url('dossiers')}}" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
            
                {{ csrf_field() }}


                <div class="form-group @if($errors->get('motif')) has-error @endif">
                    <label for=""><legend>Motif</legend></label>
                    <div class="form-group">
                        <select  name="motif" class="custom-select form-control">
                          <option selected=""></option>

                          <option value="General">General</option>
                          <option value="Perte ou gain de poids(General)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Perte ou gain de poids</option>
                          <option value="Fièvre ou frissons(General)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Fièvre ou frissons</option>
                          <option value="La faiblesse(General)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La faiblesse</option>
                          <option value="Troubles du sommeil(General)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Troubles du sommeil</option>

                          <option value="Peau">Peau</option>
                          <option value="Éruptions cutanées(Peau)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Éruptions cutanées</option>
                          <option value="Des morceaux de peau(Peau)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Des morceaux</option>
                          <option value="Démangeaisons(Peau)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Démangeaisons</option>
                          <option value="Sécheresse(Peau)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Sécheresse</option>
                          <option value="Changements de couleur(Peau)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Changements de couleur</option>
                          <option value="Changements de cheveux et d'ongles(Peau)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Changements de cheveux et d'ongles</option>

                          <option value="Tête">Tête</option>
                          <option value="Mal de tête(Tête)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Mal de tête</option>
                          <option value="Blessure à la tête(Tête)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Blessure à la tête</option>
                          <option value="La douleur du cou(Tête)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La douleur du cou</option>
                          
                          <option value="Oreilles">Oreilles</option>
                          <option value="Audience diminuée(Oreilles)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Audience diminuée</option>
                          <option value="Sonner dans les oreilles(Oreilles)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Sonner dans les oreilles</option>
                          <option value="Mal d'oreille(Oreilles)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Mal d'oreille</option>

                          <option value="Les yeux">Les yeux</option>
                          <option value="Perte de vision(Les yeux)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Perte de vision</option>
                          <option value="Lunettes(Les yeux)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Lunettes</option>
                          <option value="Douleur des yeux(Les yeux)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Douleur</option>
                          <option value="Rougeur des yeux(Les yeux)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Rougeur</option>
                          <option value="Vision floue ou double(Les yeux)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Vision floue ou double</option>
                          
                          <option value="Nez">Nez</option>
                          <option value="La farce(Nez)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La farce</option>
                          <option value="Décharge(Nez)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Décharge</option>
                          <option value="Démangeaisons(Nez)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Démangeaisons</option>
                          <option value="Fièvre des foins(Nez)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Fièvre des foins</option>
                          <option value="Saignements de nez(Nez)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Saignements de nez</option>
                          <option value="Douleur(Nez)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Douleur des sinus</option>

                          <option value="Gorge">Gorge</option>
                          <option value="Saignement(Gorge)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Saignement</option>
                          <option value="Dentiers(Gorge)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Dentiers</option>
                          <option value="Inflammation de la langue(Gorge)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Inflammation de la langue</option>
                          <option value="Bouche sèche(Gorge)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Bouche sèche</option>
                          <option value="Gorge irritée(Gorge)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Gorge irritée</option>
                          <option value="Enrouement(Gorge)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Enrouement</option>

                          <option value="Cou">Cou</option>
                          <option value="Glandes enflées(Cou)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Glandes enflées</option>
                          <option value="Douleur de cou(Cou)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Douleur</option>
                          <option value="Rigiditét(Cou)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Rigidité</option>
                          <option value="Dentiers(Cou)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Dentiers</option>                        
                          
                          <option value="Respiratoire">Respiratoire</option>
                          <option value="La toux(Respiratoire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La toux</option>  
                          <option value="Expectorations(Respiratoire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Expectorations</option>  
                          <option value="Tousser du sang(Respiratoire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Tousser du sang</option>  
                          <option value="Essoufflement(Respiratoire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Essoufflement</option>  
                          <option value="Respiration sifflante(Respiratoire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Respiration sifflante</option>  
                          <option value="Respiration douloureuse(Respiratoire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Respiration douloureuse</option>                            
                          
                          <option value="Cardiovasculaire">Cardiovasculaire</option>
                          <option value="Douleur à la poitrine(Cardiovasculaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Douleur à la poitrine</option>
                          <option value="Oppression thoracique(Cardiovasculaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Oppression thoracique</option>  
                          <option value="Difficulté à respirer en position couchée(Cardiovasculaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Difficulté à respirer en position couchée</option>
                          <option value="Gonflement sur ou autour de la poitrine?(Cardiovasculaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Gonflement sur ou autour de la poitrine?</option>  
                          <option value="Réveil soudain du sommeil avec essoufflement(Cardiovasculaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Réveil soudain du sommeil avec essoufflement</option>

                          <option value="gastro-intestinale">Gastro-intestinale</option>
                          <option value="Difficultés à avaler(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Difficultés à avaler</option>
                          <option value="Brûlures d'estomac(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Brûlures d'estomac</option> 
                          <option value="changement d'appétit(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- changement d'appétit</option>
                          <option value="La nausée(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La nausée</option> 
                          <option value="changement d'appétit(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- changement d'appétit</option>
                          <option value="Saignement rectal(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Saignement rectal</option>
                          <option value="Constipation(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Constipation</option>
                          <option value="La diarrhée(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La diarrhée</option> 
                          <option value="Yeux ou peau jaunes(intestinale)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Yeux ou peau jaunes</option>
                          
                          <option value="Urinaire">Urinaire</option>
                          <option value="Brûlure ou douleur(Urinaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Brûlure ou douleur</option>
                          <option value="Sang dans l'urine(Urinaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Sang dans l'urine</option>
                          <option value="Incontinence(Urinaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Incontinence</option>
                          <option value="Changement de la force urinaire(Urinaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Changement de la force urinaire</option>
                          
                          <option value="Vasculaire">Vasculaire</option>
                          <option value="Brûlure ou douleur(Vasculaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Douleur au mollet à la marche</option>
                          <option value="Sang dans l'urine(Vasculaire)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Crampes aux jambes</option>
                                                    
                          <option value="Musculo-squelettique">Musculo-squelettique</option>
                          <option value="Douleurs musculaires ou articulaires(Musculo)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Douleurs musculaires ou articulaires</option>
                          <option value="Rigidité musculaire(Musculo) "> &nbsp;&nbsp;&nbsp;&nbsp; --- Rigidité</option>
                          <option value="Mal au dos(Musculo)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Mal au dos</option>
                          <option value="Rougeur des articulations (Musculo)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Rougeur des articulations</option>
                          <option value="Gonflement des articulations(Musculo)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Gonflement des articulations</option>
                          <option value="Traumatisme(Musculo)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Traumatisme</option>

                          

                          
                          <option value="Neurologique">Neurologique</option>
                          <option value="Vertiges(Neurologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Vertiges</option>
                          <option value="Les saisies(Neurologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Les saisies</option>
                          <option value="La faiblesse(Neurologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La faiblesse</option>
                          <option value="Engourdissement(Neurologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Engourdissement</option>
                          <option value="Picotements(Neurologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Picotements</option>
                          <option value="Tremblement(Neurologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Tremblement</option>
                          
                          <option value="Hématologique">Hématologique</option>
                          <option value="Ecchymose(Hématologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Ecchymose</option>
                          <option value="Saignement(Hématologique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Saignement</option>
                          
                          <option value="Endocrine">Endocrine</option>
                          <option value="Intolérance à la chaleur ou au froid(Endocrine)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Intolérance à la chaleur ou au froid</option>
                          <option value="Transpiration(Endocrine)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Transpiration</option>
                          <option value="Urination fréquente(Endocrine)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Urination fréquente</option>
                          <option value="La soif(Endocrine)"> &nbsp;&nbsp;&nbsp;&nbsp; --- La soif</option>
                          <option value="Changement d'appétit(Endocrine)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Changement d'appétit</option>


                          <option value="Psychiatrique">Psychiatrique</option>
                          <option value="Nervosité(Psychiatrique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Nervosité</option>
                          <option value="Stress(Psychiatrique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Stress</option>
                          <option value="Dépression(Psychiatrique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Dépression</option>
                          <option value="Perte de mémoire(Psychiatrique)"> &nbsp;&nbsp;&nbsp;&nbsp; --- Perte de mémoire</option>

                        </select>
                      </div>

                    @if ($errors->get('motif'))
                        @foreach($errors->get('motif') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    @endif 

                </div>

                <br/>

                <div class="form-group @if($errors->get('evalue')) has-error @endif">
                        <label for=""><legend>Comment évalueriez-vous votre santé actuelle?</legend></label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="evalue" value="En bonne santé et en forme">
                            En bonne santé et en forme
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="evalue" value="J'ai des problèmes de santé mineurs">
                            J'ai des problèmes de santé mineurs
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="evalue"  value="A des problèmes de santé majeurs">
                            A des problèmes de santé majeurs
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="evalue"  value="Souffre d'une mauvaise santé">
                            Souffre d'une mauvaise santé
                          </label>
                        </div>


                        
                              
                        @if ($errors->get('evalue'))
                        @foreach($errors->get('evalue') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    @endif 

                </div>

                <br/>

                <div class="form-group @if($errors->get('evalue')) has-error @endif">
                  <label for=""><legend>Quand avez-vous consulté un médecin pour la dernière fois?</legend></label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="dernier" value="Dans le dernier jour">
                      Dans le dernier jour
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="dernier" value="La semaine dernière">
                      La semaine dernière
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="dernier"  value="Dans le dernier mois">
                      Dans le dernier mois
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="dernier" value="Au cours des six derniers mois">
                      Au cours des six derniers mois
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="dernier"  value="Dans la dernière année">
                      Dans la dernière année
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="dernier"  value="Ça fait plus d'un an">
                      Ça fait plus d'un an
                    </label>
                  </div>



                  
                        
                  @if ($errors->get('evalue'))
                  @foreach($errors->get('evalue') as $message)
                      <li>{{$message}}</li>
                  @endforeach
              @endif 

          </div>



          <br/>
                

                
          <div class="form-group">
              <label for=""><legend>Avez-vous une allergie ?</legend></label>
              <input type="text" name="allergie" class="form-control" placeholder="Si oui, Veulliez l'indiquer" id="inputDefault">
          </div>

          <br/>

              <div class="form-group">
                  <label for=""><legend>Avez-vous un historique medicale (traitement) ?</legend></label>
                  <input type="text" name="hist_trt" class="form-control" placeholder="Si oui, Veulliez l'indiquer" id="inputDefault">
              </div>

              <br/>

              <div class="form-group">
                  <label for=""><legend>Avez-vous un historique medicale (chirurgie) ?</legend></label>
                  <input type="text" name="hist_chr" class="form-control" placeholder="Si oui, Veulliez l'indiquer" id="inputDefault">
              </div>

              <br/>

              <div class="form-group">
                  <label for=""><legend>Avez-vous un historique medicale (Familiale) ?</legend></label>
                  <select  name="hist_fam" class="custom-select form-control">
                      <option selected=""></option>

                      <option value="Père"> &nbsp;&nbsp;&nbsp;&nbsp; Père</option>
                      <option value="Mère"> &nbsp;&nbsp;&nbsp;&nbsp; Mère </option>
                      <option value="Frére"> &nbsp;&nbsp;&nbsp;&nbsp; Frére</option>
                      <option value="Sœur"> &nbsp;&nbsp;&nbsp;&nbsp; Sœur</option>
                      <option value="Grand-père"> &nbsp;&nbsp;&nbsp;&nbsp; Grand-père</option>
                      <option value="Grand-mère"> &nbsp;&nbsp;&nbsp;&nbsp; Grand-mère</option>
                      <option value="Oncle"> &nbsp;&nbsp;&nbsp;&nbsp; Oncle</option>
                      <option value="Tante"> &nbsp;&nbsp;&nbsp;&nbsp; Tante</option>


                  </select>
              </div>

              <br/>


              <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="file">
                      <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Charger</span>
                    </div>
                  </div>
          </div>



                <div class="form-group mb-3 col-md-3">
                        <label for=""></label>
                        <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
