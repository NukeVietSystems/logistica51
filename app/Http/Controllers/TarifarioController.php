<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Tarifario;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class TarifarioController
 *
 * @author  The scaffold-interface created at 2016-07-18 07:09:46pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TarifarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifarios = Tarifario::all();
        return view('tarifario.index',compact('tarifarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('tarifario.create'
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

        $tarifario = new Tarifario();

        
        $tarifario->Vigencia = $input['Vigencia'];

        
        $tarifario->UsuarioUltAct = $input['UsuarioUltAct'];

        
        $tarifario->FechaUltAct = $input['FechaUltAct'];

        
        
        $tarifario->save();

        return redirect('tarifario');
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
            return URL::to('tarifario/'.$id);
        }

        $tarifario = Tarifario::findOrfail($id);
        return view('tarifario.show',compact('tarifario'));
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
            return URL::to('tarifario/'. $id . '/edit');
        }

        
        $tarifario = Tarifario::findOrfail($id);
        return view('tarifario.edit',compact('tarifario'
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

        $tarifario = Tarifario::findOrfail($id);
    	
        $tarifario->Vigencia = $input['Vigencia'];
        
        $tarifario->UsuarioUltAct = $input['UsuarioUltAct'];
        
        $tarifario->FechaUltAct = $input['FechaUltAct'];
        
        
        $tarifario->save();

        return redirect('tarifario');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/tarifario/'. $id . '/delete/');

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
     	$tarifario = Tarifario::findOrfail($id);
     	$tarifario->delete();
        return URL::to('tarifario');
    }
}
