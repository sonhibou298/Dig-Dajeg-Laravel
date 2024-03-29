<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->enum('genre', ['Homme', 'Femme']);
            $table->string('telephone', 13)->unique();
            $table->string('adresse');
            $table->date('dateNaissance');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('status', ['Actif', 'Inactif'])->default('Actif');
            $table->string('profil')->nullable();
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
