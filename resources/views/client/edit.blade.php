@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary"><h2>Modifier les informations clients physiques</h2></div>
                <div class="card-body">
                    {{-- @if (isset($confirmation))
                        @if ($confirmation == 1)
                            <div class="alert alert-success">Client ajouté</div>
                        @else
                            <div class="alert alert-danger">Client non ajouté</div>
                        @endif
                    @endif --}}
                    <form method="post" action="{{ route('updateclient') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="id" >Identifiant du client</label>
                            <input class="form-control" readonly = "true" type="text" name="id" id="id" value="{{ $client->id }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom" >Nom du client</label>
                            <input class="form-control" type="text" name="nom" id="nom" value="{{ $client->nom }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom" >Prénom du client</label>
                            <input class="form-control" type="text" name="prenom" id="prenom" value="{{ $client->prenom }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="cin" >CNI du client</label>
                            <input class="form-control" type="text" name="cin" id="cin" value="{{ $client->cin }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="matricule" >Matricule du client</label>
                            <input class="form-control" type="text" name="matricule" id="matricule" value="{{ $client->matricule }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="telephone" >Téléphone du client</label>
                            <input class="form-control" type="text" name="telephone" id="telephone" value="{{ $client->telephone }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="sexe" >Sexe du client</label>
                            <input class="form-control" type="text" name="sexe" id="sexe" value="{{ $client->sexe }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="adresse" >Adresse du client</label>
                            <input class="form-control" type="text" name="adresse" id="adresse" value="{{ $client->adresse }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dateNaissance" >Date de naissance du client</label>
                            <input class="form-control" type="date" name="dateNaissance" id="dateNaissance" value="{{ $client->dateNaissance }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email" >Email du client</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ $client->email }}">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer"/>
                            <a class="btn btn-danger" href="{{ route('getallclient') }}">Annuler</a>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
