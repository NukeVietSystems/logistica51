<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Proveedores
 *
 * @author  The scaffold-interface created at 2016-07-18 07:23:04pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('proveedores',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('Nombre');
        
        $table->String('RazonSocial');
        
        $table->String('Domicilio');
        
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
        
        $table->String('Hospedaje');
        
        $table->String('Gastronomico');
        
        $table->String('Transporte');
        
        $table->String('Otros');
        
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
        Schema::drop('proveedores');
    }
}
