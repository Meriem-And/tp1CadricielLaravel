<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTp1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->id();
            $table->string('ville', 100);
            $table->timestamps();
        });

        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100);
            $table->string('adresse', 100);
            $table->string('phone', 100);
            $table->string('email', 100);
            $table->date('naissance');
            $table->unsignedBigInteger('ville_id')->index();
            $table->foreign('ville_id')->references('id')->on('villes');
            $table->timestamps();
        });

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100)->unique();
            $table->string('contenu',8000);
            $table->string('langue',2);
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tp1');
    }
}
