<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompteEntreprise extends Model
{
    protected $fillable = array('users_id','entreprises_id','numero','rib','date_ouverture','raison_social','salaire','nom_employeur','tel_employeur','numero_identification','agios','frais_ouverture','remuneration','date_debut','date_fin');
    public static $rules = array('entreprises_id'=>'required|integer',
                                'users_id'=>'required|bigInteger',
                                'numero'=>'required|min:8',
                                'rib'=>'required|min:9',
                                'date_ouverture'=>'required|min:5',
                                'raison_social'=>'required|min:5',
                                'salaire'=>'required|min:5',
                                'nom_employeur'=>'required|min:5',
                                'tel_employeur'=>'required|min:5',
                                'numero_identification'=>'required|min:5',
                                'agios'=>'required|min:5',
                                'frais_ouverture'=>'required|min:5',
                                'remuneration'=>'required|min:5',
                                'date_debut'=>'required|min:5',
                                'date_fin'=>'required|min:5');

    public function compte()
    {
        return $this->belongsTo('App\Entreprise');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
