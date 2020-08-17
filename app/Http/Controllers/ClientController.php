<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function add()
    {
        return view('client.add');
    }
    public function persist(Request $request)
    {
        echo $request->nom;
       // return $this->add();
    }
    public function getAll()
    {
        return view('client.list');
    }
    public function get($id)
    {
        return view('client.edit');
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
