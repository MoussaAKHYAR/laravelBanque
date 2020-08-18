<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteEntrepriseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function add()
    {
        return view('compteentreprise.add');
    }
    public function getAll()
    {
        return view('compteentreprise.list');
    }
    public function get($id)
    {
        return view('compteentreprise.edit');
    }
    public function update()
    {
        return $this->getAll();
    }
    public function delete($id)
    {
        return $this->getAll();
    }
}
