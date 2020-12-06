<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Dossier;

use Auth;

use App\Http\Requests\DossierRequest;

class DossierController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        if(Auth::user()->is_admin){
            $listdossier=Dossier::all();
        }else{

        $listdossier = Dossier::where('user_id', Auth::user()->id)->get();
    }

        return view('dossier.index', ['dossiers' => $listdossier]);

    }
    
    public function create(){
        return view('dossier.create');

    }

    public function store(DossierRequest $request){
        $dossier = new Dossier();

        $dossier->motif = $request->input('motif');
        $dossier->evalue = $request->input('evalue');
        $dossier->dernier = $request->input('dernier');
        $dossier->allergie = $request->input('allergie');
        $dossier->hist_trt = $request->input('hist_trt');
        $dossier->hist_chr = $request->input('hist_chr');
        $dossier->hist_fam = $request->input('hist_fam');

        $dossier->user_id = Auth::user()->id;

        if ($request->file('file') == null) {
            $dossier->photo = "";
        }else{
            $dossier->photo = $request->file('file')->store('fichiers');
        }

        $dossier->save();

        session()->flash('success','Le dossier a été bien eneregistré!!');

        return redirect('dossiers');

    }

    public function edit($id){

        $dossier = Dossier::find($id);

        $this->authorize('update',$dossier);

        return view('dossier.edit' , ['dossier' => $dossier]);

    }

    public function update(DossierRequest $request,$id){

        $dossier = Dossier::find($id);

        $dossier->motif= $request->input('motif');
        $dossier->evalue = $request->input('evalue');
        $dossier->dernier = $request->input('dernier');

        $dossier->save();

        session()->flash('success','Le dossier a été bien modifié!!');

        return redirect('dossiers');

    }

    public function show($id){

        $listdossier = Dossier::where('id', $id)->get();

        return view('dossier.show',['dossiers'=>$listdossier]);
    }

    public function destroy(Request $request, $id){

        $dossier = Dossier::find($id);

        $dossier->delete();

        session()->flash('success','La demande a été bien supprimé!!');

        return redirect('dossiers');


    }

    public function getFichier(){

        $fichiers = Fichier::all();
        return $fichiers;
    }

}
