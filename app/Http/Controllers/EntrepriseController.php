<?php

namespace App\Http\Controllers;

use App\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('entreprise.add');
    }
    public function persist(Request $request)
    {
        $entreprise = new Entreprise();

        $entreprise->nomEntreprise = $request->nomEntreprise;
        $entreprise->telephone = $request->telephone;
        $entreprise->adresse = $request->adresse;
        $entreprise->email = $request->email;

        $result = $entreprise->save();
        //return $this->add();
        return view('entreprise.add',['confirmation'=>$result]);
    }
    public function getAll()
    {
        //$liste_entreprises = Entreprise::all();
        $liste_entreprises = Entreprise::paginate(2);
        return view('entreprise.list',['liste_entreprises'=>$liste_entreprises]);
    }
    public function edit($id)
    {
        $entreprise = Entreprise::find($id);
        return view('entreprise.edit',['entreprise'=>$entreprise]);
    }
    public function update(Request $request)
    {
        $entreprise = Entreprise::find($request->id);

        $entreprise->nomEntreprise = $request->nomEntreprise;
        $entreprise->telephone = $request->telephone;
        $entreprise->adresse = $request->adresse;
        $entreprise->email = $request->email;

        $result = $entreprise->save();
        return redirect('/entreprise/getAll');
    }
    public function delete($id)
    {
        $entreprise = Entreprise::find($id);
        if ($entreprise != null) {
            $entreprise->delete();
        }
        return $this->getAll();
    }

}
