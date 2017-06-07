<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Reserva</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Reserva Index</h1>
            <div class="row">
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/reserva/create'>
                <button class = 'btn red' type = 'submit'>Create New Reserva</button>
            </form>
                        </div>
            <table>
                <thead>
                    
                    <th>NroRes</th>
                    
                    <th>NroDeEnt</th>
                    
                    <th>Clientes</th>
                    
                    <th>NroAfiliado</th>
                    
                    <th>Titular</th>
                    
                    <th>Derivado</th>
                    
                    <th>Ingreso</th>
                    
                    <th>Egreso</th>
                    
                    <th>Parentesco</th>
                    
                    <th>Medico</th>
                    
                    <th>Especialidad</th>
                    
                    <th>Sanatorio</th>
                    
                    <th>Destino</th>
                    
                    <th>CantPax</th>
                    
                    <th>TipoHabitacion</th>
                    
                    <th>RegimenComida</th>
                    
                    <th>Noches</th>
                    
                    <th>Observaciones</th>
                    
                    <th>Anulado</th>
                    
                    <th>UsuarioUltAct</th>
                    
                    <th>FechaUltAct</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($reservas as $value)

                    <tr>
                        
                        <td>{{$value->NroRes}}</td>
                        
                        <td>{{$value->NroDeEnt}}</td>
                        
                        <td>{{$value->Clientes}}</td>
                        
                        <td>{{$value->NroAfiliado}}</td>
                        
                        <td>{{$value->Titular}}</td>
                        
                        <td>{{$value->Derivado}}</td>
                        
                        <td>{{$value->Ingreso}}</td>
                        
                        <td>{{$value->Egreso}}</td>
                        
                        <td>{{$value->Parentesco}}</td>
                        
                        <td>{{$value->Medico}}</td>
                        
                        <td>{{$value->Especialidad}}</td>
                        
                        <td>{{$value->Sanatorio}}</td>
                        
                        <td>{{$value->Destino}}</td>
                        
                        <td>{{$value->CantPax}}</td>
                        
                        <td>{{$value->TipoHabitacion}}</td>
                        
                        <td>{{$value->RegimenComida}}</td>
                        
                        <td>{{$value->Noches}}</td>
                        
                        <td>{{$value->Observaciones}}</td>
                        
                        <td>{{$value->Anulado}}</td>
                        
                        <td>{{$value->UsuarioUltAct}}</td>
                        
                        <td>{{$value->FechaUltAct}}</td>
                        
                        
                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/reserva/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/reserva/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/reserva/{{$value->id}}'><i class = 'material-icons'>info</i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="modal1" class="modal">
            <div class = "row AjaxisModal">
            </div>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script> var baseURL = "{{URL::to('/')}}"</script>
    <script src = "{{ URL::asset('js/AjaxisMaterialize.js')}}"></script>
    <script src = "{{ URL::asset('js/scaffold-interface-js/customA.js')}}"></script>
</html>
