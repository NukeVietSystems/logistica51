<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Reserva</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Reserva</h1>
            <form method = 'get' action = 'http://localhost:8000/reserva'>
                <button class = 'btn blue'>Reserva Index</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>NroRes : </i></b>
                        </td>
                        <td>{{$reserva->NroRes}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>NroDeEnt : </i></b>
                        </td>
                        <td>{{$reserva->NroDeEnt}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Clientes : </i></b>
                        </td>
                        <td>{{$reserva->Clientes}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>NroAfiliado : </i></b>
                        </td>
                        <td>{{$reserva->NroAfiliado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Titular : </i></b>
                        </td>
                        <td>{{$reserva->Titular}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Derivado : </i></b>
                        </td>
                        <td>{{$reserva->Derivado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Ingreso : </i></b>
                        </td>
                        <td>{{$reserva->Ingreso}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Egreso : </i></b>
                        </td>
                        <td>{{$reserva->Egreso}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Parentesco : </i></b>
                        </td>
                        <td>{{$reserva->Parentesco}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Medico : </i></b>
                        </td>
                        <td>{{$reserva->Medico}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Especialidad : </i></b>
                        </td>
                        <td>{{$reserva->Especialidad}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Sanatorio : </i></b>
                        </td>
                        <td>{{$reserva->Sanatorio}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Destino : </i></b>
                        </td>
                        <td>{{$reserva->Destino}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>CantPax : </i></b>
                        </td>
                        <td>{{$reserva->CantPax}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>TipoHabitacion : </i></b>
                        </td>
                        <td>{{$reserva->TipoHabitacion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>RegimenComida : </i></b>
                        </td>
                        <td>{{$reserva->RegimenComida}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Noches : </i></b>
                        </td>
                        <td>{{$reserva->Noches}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Observaciones : </i></b>
                        </td>
                        <td>{{$reserva->Observaciones}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Anulado : </i></b>
                        </td>
                        <td>{{$reserva->Anulado}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>UsuarioUltAct : </i></b>
                        </td>
                        <td>{{$reserva->UsuarioUltAct}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>FechaUltAct : </i></b>
                        </td>
                        <td>{{$reserva->FechaUltAct}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</html>
