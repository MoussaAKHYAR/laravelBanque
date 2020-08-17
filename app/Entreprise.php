<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = array('nomEntreprise','telephone','adresse','email');
    public static $rules = array('nomEntreprise'=>'required|min:3',
                                'telephone'=>'required|min:9',
                                'adresse'=>'required|min:9',
                                'email'=>'required|min:5');

    public function compteentreprise()
    {
        return $this->hasMany('App\CompteEntreprise');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
