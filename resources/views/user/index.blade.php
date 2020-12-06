@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>La liste des patients</h1>
            
            <div class="float-right">
                <a href="{{url('users/create')}}" class="btn btn-outline-info">Nouveau patient</a>
           </div>
           <br/><br/>

            <table class="table">

                <head>
                    <tr class="table-success">
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>CIN</th>
                        <th>Adresse</th>
                        <th>Tele</th>
                        <th>Sexe</th>
                        <th>Date de Naissance</th>
                        <th>Operation</th>
                    </tr>
                </head>

                <body>

                    @foreach($users as $user)
                    @if($user->is_admin != 1)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>{{ $user->cin }}</th>
                        <th>{{ $user->adr }}</th>
                        <th>{{ $user->num }}</th>
                        <th>{{ $user->sex }}</th>
                        <th>{{ $user->birth }}</th>
                        <th>
                            <form action="{{ url('users/'.$user->id)}}" method="post">

                                {{ csrf_field() }}
                                {{ method_field('DELETE') }} 
                                <a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-outline-success"><i class="fas fa-users-cog"></i></a>
                                <button type="submit" class="btn btn-outline-danger"><i class="fas fa-user-minus"></i></button>

                            </form>
                        </th>
                    </tr>
                    @endif

                    @endforeach
                </body>

            </table>
        </div>
    </div>
</div>
    
@endsection