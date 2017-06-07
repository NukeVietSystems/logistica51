<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Proveedore;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ProveedoreController
 *
 * @author  The scaffold-interface created at 2016-07-18 07:23:04pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ProveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedore::all();
        return view('proveedore.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('proveedore.create'
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

        $proveedore = new Proveedore();

        
        $proveedore->Nombre = $input['Nombre'];

        
        $proveedore->RazonSocial = $input['RazonSocial'];

        
        $proveedore->Domicilio = $input['Domicilio'];

        
        $proveedore->Localidad = $input['Localidad'];

        
        $proveedore->Provincia = $input['Provincia'];

        
        $proveedore->Pais = $input['Pais'];

        
        $proveedore->Telefono = $input['Telefono'];

        
        $proveedore->Celular = $input['Celular'];

        
        $proveedore->email = $input['email'];

        
        $proveedore->Contacto = $input['Contacto'];

        
        $proveedore->CUIT = $input['CUIT'];

        
        $proveedore->IIBB = $input['IIBB'];

        
        $proveedore->CondicionIVA = $input['CondicionIVA'];

        
        $proveedore->Hospedaje = $input['Hospedaje'];

        
        $proveedore->Gastronomico = $input['Gastronomico'];

        
        $proveedore->Transporte = $input['Transporte'];

        
        $proveedore->Otros = $input['Otros'];

        
        $proveedore->UsuarioUltAct = $input['UsuarioUltAct'];

        
        $proveedore->FechaUltAct = $input['FechaUltAct'];

        
        
        $proveedore->save();

        return redirect('proveedore');
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
            return URL::to('proveedore/'.$id);
        }

        $proveedore = Proveedore::findOrfail($id);
        return view('proveedore.show',compact('proveedore'));
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
            return URL::to('proveedore/'. $id . '/edit');
        }

        
        $proveedore = Proveedore::findOrfail($id);
        return view('proveedore.edit',compact('proveedore'
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

        $proveedore = Proveedore::findOrfail($id);
    	
        $proveedore->Nombre = $input['Nombre'];
        
        $proveedore->RazonSocial = $input['RazonSocial'];
        
        $proveedore->Domicilio = $input['Domicilio'];
        
        $proveedore->Localidad = $input['Localidad'];
        
        $proveedore->Provincia = $input['Provincia'];
        
        $proveedore->Pais = $input['Pais'];
        
        $proveedore->Telefono = $input['Telefono'];
        
        $proveedore->Celular = $input['Celular'];
        
        $proveedore->email = $input['email'];
        
        $proveedore->Contacto = $input['Contacto'];
        
        $proveedore->CUIT = $input['CUIT'];
        
        $proveedore->IIBB = $input['IIBB'];
        
        $proveedore->CondicionIVA = $input['CondicionIVA'];
        
        $proveedore->Hospedaje = $input['Hospedaje'];
        
        $proveedore->Gastronomico = $input['Gastronomico'];
        
        $proveedore->Transporte = $input['Transporte'];
        
        $proveedore->Otros = $input['Otros'];
        
        $proveedore->UsuarioUltAct = $input['UsuarioUltAct'];
        
        $proveedore->FechaUltAct = $input['FechaUltAct'];
        
        
        $proveedore->save();

        return redirect('proveedore');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/proveedore/'. $id . '/delete/');

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
     	$proveedore = Proveedore::findOrfail($id);
     	$proveedore->delete();
        return URL::to('proveedore');
    }
}
