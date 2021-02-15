<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();

            $table->string('email');
            $table->string('bio')->default('User Bio');
            $table->string('password');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('adress');
            $table->string('role');
            $table->integer('age');
            $table->integer('rating')->nullable();
            

            $table->timestamps();
        });

        Schema::table('utilisateurs', function($table) {
            $table->boolean('validated')->default(true);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');

        Schema::table('utilisateurs', function($table) {
            $table->dropColumn('validated');
        });
    }
}
