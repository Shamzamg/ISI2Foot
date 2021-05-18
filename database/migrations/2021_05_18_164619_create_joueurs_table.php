<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipe_id');
            $table->foreign('equipe_id')
                ->references('id')
                ->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('nom');
            $table->text('prenom');
            $table->integer('age');
            $table->integer('numero');
            $table->text('photo');
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
        Schema::dropIfExists('joueurs');
    }
}
