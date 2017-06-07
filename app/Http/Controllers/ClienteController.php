<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ClienteController
 *
 * @author  The scaffold-interface created at 2016-07-18 07:19:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('cliente.create'
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

        $cliente = new Cliente();

        
        $cliente->Nombre = $input['Nombre'];

        
        $cliente->RazonSocial = $input['RazonSocial'];

        
        $cliente->Domicilo = $input['Domicilo'];

        
        $cliente->Localidad = $input['Localidad'];

        
        $cliente->Provincia = $input['Provincia'];

        
        $cliente->Pais = $input['Pais'];

        
        $cliente->Telefono = $input['Telefono'];

        
        $cliente->Celular = $input['Celular'];

        
        $cliente->email = $input['email'];

        
        $cliente->Contacto = $input['Contacto'];

        
        $cliente->CUIT = $input['CUIT'];

        
        $cliente->IIBB = $input['IIBB'];

        
        $cliente->CondicionIVA = $input['CondicionIVA'];

        
        $cliente->UsuarioUltAct = $input['UsuarioUltAct'];

        
        $cliente->FechaUltAct = $input['FechaUltAct'];

        
        
        $cliente->save();

        return redirect('cliente');
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
            return URL::to('cliente/'.$id);
        }

        $cliente = Cliente::findOrfail($id);
        return view('cliente.show',compact('cliente'));
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
            return URL::to('cliente/'. $id . '/edit');
        }

        
        $cliente = Cliente::findOrfail($id);
        return view('cliente.edit',compact('cliente'
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

        $cliente = Cliente::findOrfail($id);
    	
        $cliente->Nombre = $input['Nombre'];
        
        $cliente->RazonSocial = $input['RazonSocial'];
        
        $cliente->Domicilo = $input['Domicilo'];
        
        $cliente->Localidad = $input['Localidad'];
        
        $cliente->Provincia = $input['Provincia'];
        
        $cliente->Pais = $input['Pais'];
        
        $cliente->Telefono = $input['Telefono'];
        
        $cliente->Celular = $input['Celular'];
        
        $cliente->email = $input['email'];
        
        $cliente->Contacto = $input['Contacto'];
        
        $cliente->CUIT = $input['CUIT'];
        
        $cliente->IIBB = $input['IIBB'];
        
        $cliente->CondicionIVA = $input['CondicionIVA'];
        
        $cliente->UsuarioUltAct = $input['UsuarioUltAct'];
        
        $cliente->FechaUltAct = $input['FechaUltAct'];
        
        
        $cliente->save();

        return redirect('cliente');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/cliente/'. $id . '/delete/');

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
     	$cliente = Cliente::findOrfail($id);
     	$cliente->delete();
        return URL::to('cliente');
    }
}
