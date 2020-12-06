<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\User;


class UserController extends Controller
{

    public function __construct(){
        return $this->middleware('auth');
    }
    //lister les users
    public function index(){
        $listuser = User::all();

        return view('user.index',['users' => $listuser]);
        
    }
    //afficher le formulaire de creation des users
    public function create(){
        return view('user.create');
        
    }

    //enregistrer les users
    public function store(Request $request){
        $model = new User();
        $model->create($request->merge(['password' => Hash::make($request->get('password'))])->all()); 
        
        return redirect('users');
    }
    //recuperer un user et le mettre dans un formulaire
    public function edit($id){
        $user = User::find($id);

        return view('user.edit',['user' => $user]);
        
    }
    //modifier un user
    public function update(Request $request,$id){

        $user = User::find($id);

        $user->is_admin= $request->input('is_admin');
        $user->is_med= $request->input('is_med');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->cin = $request->input('cin');
        $user->adr = $request->input('adr');
        $user->num = $request->input('num');
        $user->sex = $request->input('sex');
        $user->birth = $request->input('birth');

        $user->save();

        session()->flash('success','Le dossier a été bien modifié!!');

        return redirect('users');
        
    }
    //supprimmer un user
    public function destroy(Request $request, $id){

        $user = User::find($id);

        $user->delete();

        session()->flash('success','L\'utilisateur a été bien supprimé!!');

        return redirect('users');


    }
}