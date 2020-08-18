@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12" >
            <div class="card ">
                <div class="card-header text-center bg-primary"><h2>Liste des clients physiques</h2></div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive">
                        <tr class="table-active">
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Matricule</th>
                            <th>CIN</th>
                            <th>Telephone</th>
                            <th>Date de naissance</th>
                            <th>Sexe</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($liste_clients as $client )
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->nom }}</td>
                                <td>{{ $client->prenom }}</td>
                                <td>{{ $client->matricule }}</td>
                                <td>{{ $client->cin }}</td>
                                <td>{{ $client->telephone }}</td>
                                <td>{{ $client->dateNaissance }}</td>
                                <td>{{ $client->sexe }}</td>
                                <td>{{ $client->adresse }}</td>
                                <td>{{ $client->email }}</td>
                                <td> <a href="{{ route('editclient',['id'=>$client->id]) }}">Editer</a></td>
                                <td> <a href="{{ route('deleteclient',['id'=>$client->id]) }}" onclick="return confirm('voulez vous supprimer ?')">Supprimer</a></td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $liste_clients->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
