<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('pseudo')->unique();
            $table->string('email')->unique();
            $table->string('mdp');
            $table->foreign('character_id')->references('id')->on('characters');
            $table->foreign('group_id')->references('id')->on('groups');

            $table->timestamps();
        });
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('nom_char')->unique();
            $table->text('description');
            $table->text('specialty')->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('group_id')->references('id')->on('groups');
            $table->timestamps();
        });
        Schema::create('attributes', function (Blueprint $table) {
            $table->id();
            $table->integer('magie');
            $table->integer('force');
            $table->integer('agilite');
            $table->integer('intelligence');
            $table->integer('points_de_vie');
            $table->foreign('character_id')->references('id')->on('characters');
            $table->timestamps();
        });
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('nom_groupe');
            $table->text('description_groupe');
            $table->integer('nbre_places');
            $table->boolean('is_active')->default(false);
            $table->foreign('character_id')->references('id')->on('characters');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
