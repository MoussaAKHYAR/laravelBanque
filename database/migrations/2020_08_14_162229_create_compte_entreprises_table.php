<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entreprises_id')->unsigned();
            $table->foreign('entreprises_id')->references('id')->on('entreprises');
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('numero');
            $table->string('rib');
            $table->dateTime('date_ouverture');
            $table->string('raison_social');
            $table->float('salaire');
            $table->string('nom_employeur');
            $table->string('tel_employeur');
            $table->string('numero_identification');
            $table->string('agios');
            $table->string('frais_ouverture');
            $table->string('remuneration');
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte_entreprises');
    }
}
