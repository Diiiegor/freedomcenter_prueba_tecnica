<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CrearTablaTiposAnimales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_animales',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->timestamps();
        });

        DB::table('tipos_animales')->insert(['id'=>1, 'nombre'=>'Animal peligroso']);
        DB::table('tipos_animales')->insert(['id'=>2, 'nombre'=>'Otro']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_animales');
    }
}
