<?php

namespace App\Http\Controllers;

use App\Compte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('compte.add');
    }
    public function persist(Request $request)
    {
        $compte = new Compte();

        $compte->numero = $request->numero;
        $compte->rib = $request->rib;
        $compte->date_ouverture = $request->date_ouverture;
        $compte->raison_social = $request->raison_social;
        $compte->salaire = $request->salaire;
        $compte->nom_employeur = $request->nom_employeur;
        $compte->tel_employeur = $request->tel_employeur;
        $compte->numero_identification = $request->numero_identification;
        $compte->agios = $request->agios;
        $compte->frais_ouverture = $request->frais_ouverture;
        $compte->remuneration = $request->remuneration;
        $compte->date_debut = $request->date_debut;
        $compte->date_fin = $request->date_fin;
        $compte->clients_id = $request->clients_id;
        $compte->users_id = Auth::id();

        $result = $compte->save();
        //return $this->add();
        return view('compte.add',['confirmation'=>$result]);
    }
    public function getAll()
    {
        //$liste_clients = Compte::all();
        $liste_clients =Compte::paginate(2);
        return view('compte.list',['liste_clients'=>$liste_clients]);
    }
    // public function get($id)
    // {
    //     return view('compte.edit');
    // }
    public function edit($id)
    {
        $compte = Compte::find($id);
        return view('compte.edit',['compte'=>$compte]);
    }
    public function update(Request $request)
    {
        $compte = Compte::find($request->id);

        $compte->nom = $request->nom;
        $compte->prenom = $request->prenom;
        $compte->matricule = $request->matricule;
        $compte->cin = $request->cin;
        $compte->sexe = $request->sexe;
        $compte->telephone = $request->telephone;
        $compte->dateNaissance = $request->dateNaissance;
        $compte->adresse = $request->adresse;
        $compte->email = $request->email;

        $result = $compte->save();
        //return $this->add();
        //return view('compte.add',['confirmation'=>$result]);
        //return $this->getAll();
        return redirect('/compte/getAll');
    }
    public function delete($id)
    {
        $compte = Compte::find($id);
        if ($compte != null) {
            $compte->delete();
        }
        return $this->getAll();
    }
}
