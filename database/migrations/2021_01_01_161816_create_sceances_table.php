<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSceancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sceances', function (Blueprint $table) {
            $table->id();

            $table->string('idEnseignant');
            $table->string('titre');
            $table->string('heureDebut');
            $table->string('jour');
            $table->string('heureFin');
            $table->boolean('saturee')->default(false);
            $table->integer('capacite');


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
        Schema::dropIfExists('sceances');
    }
}
