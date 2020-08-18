@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary"><h2>Modifier les informations de l'entreprise</h2></div>
                <div class="card-body">
                    {{-- @if (isset($confirmation))
                        @if ($confirmation == 1)
                            <div class="alert alert-success">Client ajouté</div>
                        @else
                            <div class="alert alert-danger">Client non ajouté</div>
                        @endif
                    @endif --}}
                    <form method="post" action="{{ route('updateentreprise') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="id" >Identifiant de l'entreprise</label>
                            <input class="form-control" readonly = "true" type="text" name="id" id="id" value="{{ $entreprise->id }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nomEntreprise" >Nom de l'entreprise</label>
                            <input class="form-control" type="text" name="nomEntreprise" id="nomEntreprise" value="{{ $entreprise->nomEntreprise }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="telephone" >Téléphone de l'entreprise</label>
                            <input class="form-control" type="text" name="telephone" id="telephone" value="{{ $entreprise->telephone }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="adresse" >Adresse de l'entreprise</label>
                            <input class="form-control" type="text" name="adresse" id="adresse" value="{{ $entreprise->adresse }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email" >Email de l'entreprise</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ $entreprise->email }}">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer"/>
                            <a class="btn btn-danger" href="{{ route('getallentreprise') }}">Annuler</a>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
