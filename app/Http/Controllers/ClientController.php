<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('client.add');
    }
    public function persist(Request $request)
    {
        $client = new Client();

        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->matricule = $request->matricule;
        $client->cin = $request->cin;
        $client->sexe = $request->sexe;
        $client->telephone = $request->telephone;
        $client->dateNaissance = $request->dateNaissance;
        $client->adresse = $request->adresse;
        $client->email = $request->email;

        $result = $client->save();
        //return $this->add();
        return view('client.add',['confirmation'=>$result]);
    }
    public function getAll()
    {
        //$liste_clients = Client::all();
        $liste_clients =Client::paginate(2);
        return view('client.list',['liste_clients'=>$liste_clients]);
    }
    // public function get($id)
    // {
    //     return view('client.edit');
    // }
    public function edit($id)
    {
        $client = Client::find($id);
        return view('client.edit',['client'=>$client]);
    }
    public function update(Request $request)
    {
        $client = Client::find($request->id);

        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->matricule = $request->matricule;
        $client->cin = $request->cin;
        $client->sexe = $request->sexe;
        $client->telephone = $request->telephone;
        $client->dateNaissance = $request->dateNaissance;
        $client->adresse = $request->adresse;
        $client->email = $request->email;

        $result = $client->save();
        //return $this->add();
        //return view('client.add',['confirmation'=>$result]);
        //return $this->getAll();
        return redirect('/client/getAll');
    }
    public function delete($id)
    {
        $client = Client::find($id);
        if ($client != null) {
            $client->delete();
        }
        return $this->getAll();
    }
}
