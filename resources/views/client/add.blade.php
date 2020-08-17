@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Formulaires d'enregistrements des clients physiques</h2></div>
                <div class="card-body">
                    <form method="post" action="{{ route('persistclient') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="nom" >Nom du client</label>
                            <input class="form-control" type="text" name="nom" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom" >Prénom du client</label>
                            <input class="form-control" type="text" name="prenom" id="prenom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="cin" >CNI du client</label>
                            <input class="form-control" type="text" name="cin" id="cin">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="matricule" >Matricule du client</label>
                            <input class="form-control" type="text" name="matricule" id="matricule">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="telephone" >Téléphone du client</label>
                            <input class="form-control" type="text" name="telephone" id="telephone">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="sexe" >Sexe du client</label>
                            <input class="form-control" type="text" name="sexe" id="sexe">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="adresse" >Adresse du client</label>
                            <input class="form-control" type="text" name="adresse" id="adresse">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="dateNaissance" >Date de naissance du client</label>
                            <input class="form-control" type="date" name="dateNaissance" id="dateNaissance">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email" >Email du client</label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer"/>
                            <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler"/>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
