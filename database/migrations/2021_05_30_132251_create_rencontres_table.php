<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencontresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencontres', function (Blueprint $table) {
            $table->id();
            $table->text('score');
            $table->unsignedBigInteger('equipe_id1');
            $table->foreign('equipe_id1')
                ->references('id')
                ->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('equipe_id2');
            $table->foreign('equipe_id2')
                ->references('id')
                ->on('equipes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('date');
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
        Schema::dropIfExists('rencontres');
    }
}
