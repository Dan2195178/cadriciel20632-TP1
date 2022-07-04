<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('adresse',150);
            $table->string('phone',100);
            $table->string('email',100);
            $table->unique('email');
            $table->date('date_naissance');
            $table->unsignedBigInteger('ville_id');
 
           // $table->foreign('ville_id')->references('id')->on('villes');
           // $table->foreignId('ville_id')->constrained('villes','id');
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
        Schema::dropIfExists('etudiants');
    }
}
