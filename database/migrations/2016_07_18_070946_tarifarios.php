<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Tarifarios
 *
 * @author  The scaffold-interface created at 2016-07-18 07:09:46pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Tarifarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('tarifarios',function (Blueprint $table){

        $table->increments('id');
        
        $table->date('Vigencia');
        
        $table->String('UsuarioUltAct');
        
        $table->date('FechaUltAct');
        
        /**
         * Foreignkeys section
         */
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('tarifarios');
    }
}
