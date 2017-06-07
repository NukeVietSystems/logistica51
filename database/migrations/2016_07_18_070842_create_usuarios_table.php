<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Usuarios
 *
 * @author  The scaffold-interface created at 2016-07-18 07:08:42pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('usuarios',function (Blueprint $table){

        $table->increments('id');
        $table->string('Legajo');
        $table->string('Apellido');
        $table->string('Nombres');
        $table->string('Usuario');
        $table->string('Telefono');
        $table->string('email')->unique();
        $table->string('password', 60);
        $table->string('Activo');
        $table->string('tipo');
        $table->rememberToken();
        $table->string('UsuarioUltAct');
        $table->string('FechaUltAct');
        $table->timestamps();
        $table->integer('tipo_usuarios_id')->unsigned();
        $table->foreign('tipo_usuarios_id')->references('id')->on('descripcion');
        
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
        Schema::drop('usuarios');
    }
}
