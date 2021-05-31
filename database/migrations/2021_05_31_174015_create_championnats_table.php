<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionnatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championnats', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->unsignedBigInteger('annee_debut');
            $table->unsignedBigInteger('annee_fin');
            $table->text('logo');
            $table->unsignedBigInteger('pays_id');
            $table->foreign('pays_id')
                ->references('id')
                ->on('pays')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('championnats');
    }
}
