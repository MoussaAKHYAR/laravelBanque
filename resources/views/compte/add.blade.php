@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary"><h2>Formulaires d'enregistrements du compte clients physiques</h2></div>
                <div class="card-body">
                    @if (isset($confirmation))
                        @if ($confirmation == 1)
                            <div class="alert alert-success">Compte ajouté</div>
                        @else
                            <div class="alert alert-danger">Compte non ajouté</div>
                        @endif
                    @endif
                    <form method="post" action="{{ route('persistcompteclient') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="numero" >Numero du compte</label>
                            <input class="form-control" type="text" name="numero" id="numero">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="rib" >RIB du compte</label>
                            <input class="form-control" type="text" name="rib" id="rib">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="date_ouverture" >Date d'ouverture du compte</label>
                            <input class="form-control" type="text" name="date_ouverture" id="date_ouverture">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="raison_social" >Raison social</label>
                            <input class="form-control" type="text" name="raison_social" id="raison_social">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="telephone" >Téléphone du client</label>
                            <input class="form-control" type="text" name="telephone" id="telephone">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="salaire" >Sexe du client</label>
                            <input class="form-control" type="text" name="salaire" id="salaire">
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
