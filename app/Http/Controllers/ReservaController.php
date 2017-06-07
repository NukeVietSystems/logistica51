<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Reserva;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ReservaController
 *
 * @author  The scaffold-interface created at 2016-07-18 07:25:36pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        return view('reserva.index',compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('reserva.create'
                );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::except('_token');

        $reserva = new Reserva();

        
        $reserva->NroRes = $input['NroRes'];

        
        $reserva->NroDeEnt = $input['NroDeEnt'];

        
        $reserva->Clientes = $input['Clientes'];

        
        $reserva->NroAfiliado = $input['NroAfiliado'];

        
        $reserva->Titular = $input['Titular'];

        
        $reserva->Derivado = $input['Derivado'];

        
        $reserva->Ingreso = $input['Ingreso'];

        
        $reserva->Egreso = $input['Egreso'];

        
        $reserva->Parentesco = $input['Parentesco'];

        
        $reserva->Medico = $input['Medico'];

        
        $reserva->Especialidad = $input['Especialidad'];

        
        $reserva->Sanatorio = $input['Sanatorio'];

        
        $reserva->Destino = $input['Destino'];

        
        $reserva->CantPax = $input['CantPax'];

        
        $reserva->TipoHabitacion = $input['TipoHabitacion'];

        
        $reserva->RegimenComida = $input['RegimenComida'];

        
        $reserva->Noches = $input['Noches'];

        
        $reserva->Observaciones = $input['Observaciones'];

        
        $reserva->Anulado = $input['Anulado'];

        
        $reserva->UsuarioUltAct = $input['UsuarioUltAct'];

        
        $reserva->FechaUltAct = $input['FechaUltAct'];

        
        
        $reserva->save();

        return redirect('reserva');
    }

    /**
     * Display the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Request::ajax())
        {
            return URL::to('reserva/'.$id);
        }

        $reserva = Reserva::findOrfail($id);
        return view('reserva.show',compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Request::ajax())
        {
            return URL::to('reserva/'. $id . '/edit');
        }

        
        $reserva = Reserva::findOrfail($id);
        return view('reserva.edit',compact('reserva'
                )
                );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id)
    {
        $input = Request::except('_token');

        $reserva = Reserva::findOrfail($id);
    	
        $reserva->NroRes = $input['NroRes'];
        
        $reserva->NroDeEnt = $input['NroDeEnt'];
        
        $reserva->Clientes = $input['Clientes'];
        
        $reserva->NroAfiliado = $input['NroAfiliado'];
        
        $reserva->Titular = $input['Titular'];
        
        $reserva->Derivado = $input['Derivado'];
        
        $reserva->Ingreso = $input['Ingreso'];
        
        $reserva->Egreso = $input['Egreso'];
        
        $reserva->Parentesco = $input['Parentesco'];
        
        $reserva->Medico = $input['Medico'];
        
        $reserva->Especialidad = $input['Especialidad'];
        
        $reserva->Sanatorio = $input['Sanatorio'];
        
        $reserva->Destino = $input['Destino'];
        
        $reserva->CantPax = $input['CantPax'];
        
        $reserva->TipoHabitacion = $input['TipoHabitacion'];
        
        $reserva->RegimenComida = $input['RegimenComida'];
        
        $reserva->Noches = $input['Noches'];
        
        $reserva->Observaciones = $input['Observaciones'];
        
        $reserva->Anulado = $input['Anulado'];
        
        $reserva->UsuarioUltAct = $input['UsuarioUltAct'];
        
        $reserva->FechaUltAct = $input['FechaUltAct'];
        
        
        $reserva->save();

        return redirect('reserva');
    }

    /**
     * Delete confirmation message by Ajaxis
     *
     * @link  https://github.com/amranidev/ajaxis
     *
     * @return  String
     */
    public function DeleteMsg($id)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/reserva/'. $id . '/delete/');

        if(Request::ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$reserva = Reserva::findOrfail($id);
     	$reserva->delete();
        return URL::to('reserva');
    }
}
