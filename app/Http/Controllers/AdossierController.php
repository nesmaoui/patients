<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\User;
use App\Dossier;
use App\Adossier;
use Auth;
use App\Rdv;
use App\Fichier;
use App\Commentaire;

class AdossierController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
    //lister les users
    public function index(){

        if(Auth::user()->is_admin){
            $listdossier=Adossier::all();
        }else{

        $listdossier = Adossier::where('user_id', Auth::user()->id)->orWhere('pat_id',Auth::user()->id)->get();
    }

        return view('adossier.index', ['adossiers' => $listdossier]);

    }
    
    //afficher le formulaire de creation des users
    public function create(){

        $listmed= User::all();
        $listdos= Dossier::all();

        return view('adossier.create',['users'=>$listmed,'dossiers'=>$listdos]);
        
    }

    public function store(Request $request){
        $dossier = new Adossier();

        $tmp=Dossier::find($request->input('dossier_id'));

        $dossier->dossier_id = $request->input('dossier_id');
        $dossier->user_id = $request->input('user_id');
        $dossier->status = $request->input('status');
        $dossier->motif = $request->input('motif');
        $dossier->pat_id=$tmp->user_id;

        $dossier->save();

        session()->flash('success','Le dossier a été bien eneregistré!!');

        return redirect('adossiers');

    }

    public function show($id) {

        return view('adossier.show', ['id' => $id]);
      }


      public function destroy(Request $request, $id){

        $dossier = Adossier::find($id);

        $dossier->delete();

        session()->flash('success','Le dossier a été bien supprimé!!');

        return redirect('dossiers');


    }


      public function getData($id){

         $dossier= Adossier::find($id);

         $rdvs= $dossier->rdvs()->orderBy('created_at', 'desc')->get();
         $commentaires= $dossier->commentaires()->orderBy('created_at', 'desc')->get();
         $fichiers=$dossier->fichiers()->orderBy('created_at','desc')->get();

         return Response()->json([
            'rdvs'  => $rdvs,
            'commentaires' => $commentaires,
            'fichiers' => $fichiers,
         ]);
      }


      public function addRdv(Request $request){

        $rdv= new Rdv();

        $rdv->debut=$request->debut;
        $rdv->fin=$request->fin;
        $rdv->adossier_id=$request->adossier_id;

        $rdv->save();

        return Response()->json(['etat' => true , 'id' => $rdv->id]);

      }

      public function addCommentaire(Request $request){

        $commentaire= new Commentaire();

        $commentaire->contenu=$request->contenu;
        $commentaire->adossier_id=$request->adossier_id;
        $commentaire->user_id= Auth::user()->id;
        $commentaire->user_name= Auth::user()->name;


        $commentaire->save();

        return Response()->json(['etat' => true , 'id' => $commentaire->id]);

      }


      public function addFichier(Request $request){
        $fichier = new Fichier();

        $fichier->description=$request->description;

        $fichier->save();

        return Response()->json(['etat' => true , 'id' => $fichier->id]);

      }


      public function uploadFichiers(Request $request){

        $exploded= explode(',',$request->lien);

        $decod=base64_decode($exploded[1]);

        if(str_contains($exploded[0], 'jpeg'))
        $extension = 'jpg';

        if(str_contains($exploded[0], 'jpg'))
        $extension = 'jpg';

        elseif (str_contains($exploded[0], 'png')) {
          $extension = 'png';
        }

        elseif (str_contains($exploded[0], 'msword')) {
          $extension = 'doc';
        }


        $filename= str_random().'.'.$extension;

        $path = public_path().'/'.$request->adossier_id.'/'.$filename;

        file_put_contents($path,$decod);



        $fichier= Fichier::create($request->except('lien'));


        return Response()->json(['etat' => true , 'id' => $fichier->id]);

      }

      public function deleteRdv($id){

        $rdv= Rdv::find($id);
        
        $rdv->delete();

        return Response()->json(['etat' => true]);
      }

      public function deleteCommentaire ($id){

        $commentaire= Commentaire::find($id);
        
        $commentaire->delete();

        return Response()->json(['etat' => true]);
      }

      public function indexRdv(){

        $listrdv = Rdv::all();
        
        return view('rendez-vous.index', ['rdvs' => $listrdv]);

      }

}
