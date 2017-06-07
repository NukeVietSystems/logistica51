<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Reservas
 *
 * @author  The scaffold-interface created at 2016-07-18 07:25:36pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('reservas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('NroRes');
        
        $table->String('NroDeEnt');
        
        $table->String('Clientes');
        
        $table->String('NroAfiliado');
        
        $table->String('Titular');
        
        $table->String('Derivado');
        
        $table->String('Ingreso');
        
        $table->String('Egreso');
        
        $table->String('Parentesco');
        
        $table->String('Medico');
        
        $table->String('Especialidad');
        
        $table->String('Sanatorio');
        
        $table->String('Destino');
        
        $table->String('CantPax');
        
        $table->String('TipoHabitacion');
        
        $table->String('RegimenComida');
        
        $table->String('Noches');
        
        $table->longText('Observaciones');
        
        $table->String('Anulado');
        
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
        Schema::drop('reservas');
    }
}
