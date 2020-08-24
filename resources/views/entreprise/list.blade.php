@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8" >
            <div class="card ">
                <div class="card-header text-center bg-primary"><h2>Liste des clients entreprises</h2></div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-responsive">
                        <tr class="table-active">
                            <th>Identifiant</th>
                            <th>Nom de l'entreprise</th>
                            <th>Telephone</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($liste_entreprises as $entreprise )
                            <tr>
                                <td>{{ $entreprise->id }}</td>
                                <td>{{ $entreprise->nomEntreprise }}</td>
                                <td>{{ $entreprise->telephone }}</td>
                                <td>{{ $entreprise->adresse }}</td>
                                <td>{{ $entreprise->email }}</td>
                                <td> <a href="{{ route('editentreprise',['id'=>$entreprise->id]) }}">Editer</a></td>
                                <td> <a href="{{ route('deleteentreprise',['id'=>$entreprise->id]) }}" onclick="return confirm('voulez vous supprimer ?')">Supprimer</a></td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $liste_entreprises->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
