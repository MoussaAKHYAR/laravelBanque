<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = array('nom','prenom','telephone','adresse','matricule','cin','sexe','dateNaissance','email');
    public static $rules = array('nom'=>'required|min:3',
                                'prenom'=>'required|min:3',
                                'telephone'=>'required|min:9',
                                'adresse'=>'required|min:5',
                                'matricule'=>'required|min:8',
                                'cin'=>'required|min:8',
                                'sexe'=>'required|min:8',
                                'dateNaissance'=>'required|min:8',
                                'email'=>'required|min:8');


    public function compte()
    {
        return $this->hasMany('App\Compte');
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
