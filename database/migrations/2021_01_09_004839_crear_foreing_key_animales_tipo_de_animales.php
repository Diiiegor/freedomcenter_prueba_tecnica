<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearForeingKeyAnimalesTipoDeAnimales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animales',function(Blueprint $table){
            $table->unsignedBigInteger('id_tipo_animal');
            $table->foreign('id_tipo_animal')->references('id')->on('tipos_animales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animales',function(Blueprint $table){
            $table->dropForeign('id_tipo_animal');
        });
    }
}
