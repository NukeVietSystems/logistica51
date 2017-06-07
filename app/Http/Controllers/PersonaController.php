<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Persona;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class PersonaController
 *
 * @author  The scaffold-interface created at 2016-07-18 06:59:59pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('persona.create'
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

        $persona = new Persona();

        
        $persona->TipoDoc = $input['TipoDoc'];

        
        $persona->NroDoc = $input['NroDoc'];

        
        $persona->Apellido = $input['Apellido'];

        
        $persona->Nombre = $input['Nombre'];

        
        $persona->Sexo = $input['Sexo'];

        
        $persona->Telefono = $input['Telefono'];

        
        $persona->Celular = $input['Celular'];

        
        $persona->eMail = $input['eMail'];

        
        $persona->FechaNac = $input['FechaNac'];

        
        $persona->Domicilio = $input['Domicilio'];

        
        $persona->Localidad = $input['Localidad'];

        
        $persona->Provincia = $input['Provincia'];

        
        $persona->Pais = $input['Pais'];

        
        $persona->UsuarioUltAct = $input['UsuarioUltAct'];

        
        $persona->FechaUltAct = $input['FechaUltAct'];

        
        
        $persona->save();

        return redirect('persona');
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
            return URL::to('persona/'.$id);
        }

        $persona = Persona::findOrfail($id);
        return view('persona.show',compact('persona'));
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
            return URL::to('persona/'. $id . '/edit');
        }

        
        $persona = Persona::findOrfail($id);
        return view('persona.edit',compact('persona'
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

        $persona = Persona::findOrfail($id);
    	
        $persona->TipoDoc = $input['TipoDoc'];
        
        $persona->NroDoc = $input['NroDoc'];
        
        $persona->Apellido = $input['Apellido'];
        
        $persona->Nombre = $input['Nombre'];
        
        $persona->Sexo = $input['Sexo'];
        
        $persona->Telefono = $input['Telefono'];
        
        $persona->Celular = $input['Celular'];
        
        $persona->eMail = $input['eMail'];
        
        $persona->FechaNac = $input['FechaNac'];
        
        $persona->Domicilio = $input['Domicilio'];
        
        $persona->Localidad = $input['Localidad'];
        
        $persona->Provincia = $input['Provincia'];
        
        $persona->Pais = $input['Pais'];
        
        $persona->UsuarioUltAct = $input['UsuarioUltAct'];
        
        $persona->FechaUltAct = $input['FechaUltAct'];
        
        
        $persona->save();

        return redirect('persona');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/persona/'. $id . '/delete/');

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
     	$persona = Persona::findOrfail($id);
     	$persona->delete();
        return URL::to('persona');
    }
}
