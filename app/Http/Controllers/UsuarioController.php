<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class UsuarioController
 *
 * @author  The scaffold-interface created at 2016-07-18 07:08:42pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('usuario.create'
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

        $usuario = new Usuario();

        
        $usuario->Legajo = $input['Legajo'];

        
        $usuario->Apellido = $input['Apellido'];

        
        $usuario->Nombres = $input['Nombres'];

        
        $usuario->Usuario = $input['Usuario'];

        
        $usuario->Telefono = $input['Telefono'];

        
        $usuario->email = $input['email'];

        
        $usuario->Activo = $input['Activo'];

        
        $usuario->UsuarioUltAct = $input['UsuarioUltAct'];

        
        $usuario->FechaUltAct = $input['FechaUltAct'];

        
        
        $usuario->save();

        return redirect('usuario');
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
            return URL::to('usuario/'.$id);
        }

        $usuario = Usuario::findOrfail($id);
        return view('usuario.show',compact('usuario'));
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
            return URL::to('usuario/'. $id . '/edit');
        }

        
        $usuario = Usuario::findOrfail($id);
        return view('usuario.edit',compact('usuario'
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

        $usuario = Usuario::findOrfail($id);
    	
        $usuario->Legajo = $input['Legajo'];
        
        $usuario->Apellido = $input['Apellido'];
        
        $usuario->Nombres = $input['Nombres'];
        
        $usuario->Usuario = $input['Usuario'];
        
        $usuario->Telefono = $input['Telefono'];
        
        $usuario->email = $input['email'];
        
        $usuario->Activo = $input['Activo'];
        
        $usuario->UsuarioUltAct = $input['UsuarioUltAct'];
        
        $usuario->FechaUltAct = $input['FechaUltAct'];
        
        
        $usuario->save();

        return redirect('usuario');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/usuario/'. $id . '/delete/');

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
     	$usuario = Usuario::findOrfail($id);
     	$usuario->delete();
        return URL::to('usuario');
    }
}
