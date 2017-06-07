<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Personas
 *
 * @author  The scaffold-interface created at 2016-07-18 06:59:59pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('personas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('TipoDoc');
        
        $table->String('NroDoc');
        
        $table->String('Apellido');
        
        $table->String('Nombre');
        
        $table->String('Sexo');
        
        $table->String('Telefono');
        
        $table->String('Celular');
        
        $table->String('eMail');
        
        $table->date('FechaNac');
        
        $table->String('Domicilio');
        
        $table->String('Localidad');
        
        $table->String('Provincia');
        
        $table->String('Pais');
        
        $table->String('UsuarioUltAct');
        
        $table->String('FechaUltAct');
        
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
        Schema::drop('personas');
    }
}
