<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Clientes
 *
 * @author  The scaffold-interface created at 2016-07-18 07:19:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('clientes',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('Nombre');
        
        $table->String('RazonSocial');
        
        $table->String('Domicilo');
        
        $table->String('Localidad');
        
        $table->String('Provincia');
        
        $table->String('Pais');
        
        $table->String('Telefono');
        
        $table->String('Celular');
        
        $table->String('email');
        
        $table->String('Contacto');
        
        $table->String('CUIT');
        
        $table->String('IIBB');
        
        $table->String('CondicionIVA');
        
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
        Schema::drop('clientes');
    }
}
