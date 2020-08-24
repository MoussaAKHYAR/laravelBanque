@extends('layouts.admin')

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
                            <input class="form-control" type="date" name="date_ouverture" id="date_ouverture">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="raison_social" >Raison social</label>
                            <input class="form-control" type="text" name="raison_social" id="raison_social">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="salaire" >Salaire</label>
                            <input class="form-control" type="text" name="salaire" id="salaire">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nom_employeur" >Nom employeur</label>
                            <input class="form-control" type="text" name="nom_employeur" id="nom_employeur">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="tel_employeur" >Telephone employeur</label>
                            <input class="form-control" type="text" name="tel_employeur" id="tel_employeur">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="numero_identification" >Numero d'identification</label>
                            <input class="form-control" type="text" name="numero_identification" id="numero_identification">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="agios" >Agios</label>
                            <input class="form-control" type="number" name="agios" id="agios">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="frais_ouverture" >Frais d'ouverture</label>
                            <input class="form-control" type="text" name="frais_ouverture" id="frais_ouverture">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="remuneration" >Remuneration</label>
                            <input class="form-control" type="number" name="remuneration" id="remuneration">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="date_debut" >Date debut</label>
                            <input class="form-control" type="date" name="date_debut" id="date_debut">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="date_fin" >Date fin</label>
                            <input class="form-control" type="date" name="date_fin" id="date_fin">
                        </div>
                        <div class="form-group">
                            <label for="control-label" for="clients_id">Choisissez un client</label>
                            <select for="control-label" name="clients_id" id="clients_id">
                                <option value="0">Faites votre choix</option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->nom }} {{ $client->prenom }}</option>
                                @endforeach
                            </select>
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
