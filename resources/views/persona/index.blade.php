<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Index Persona</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Persona Index</h1>
            <div class="row">
            <form class = 'col s3' method = 'get' action = 'http://localhost:8000/persona/create'>
                <button class = 'btn red' type = 'submit'>Create New Persona</button>
            </form>
                        </div>
            <table>
                <thead>
                    
                    <th>TipoDoc</th>
                    
                    <th>NroDoc</th>
                    
                    <th>Apellido</th>
                    
                    <th>Nombre</th>
                    
                    <th>Sexo</th>
                    
                    <th>Telefono</th>
                    
                    <th>Celular</th>
                    
                    <th>eMail</th>
                    
                    <th>FechaNac</th>
                    
                    <th>Domicilio</th>
                    
                    <th>Localidad</th>
                    
                    <th>Provincia</th>
                    
                    <th>Pais</th>
                    
                    <th>UsuarioUltAct</th>
                    
                    <th>FechaUltAct</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($personas as $value)

                    <tr>
                        
                        <td>{{$value->TipoDoc}}</td>
                        
                        <td>{{$value->NroDoc}}</td>
                        
                        <td>{{$value->Apellido}}</td>
                        
                        <td>{{$value->Nombre}}</td>
                        
                        <td>{{$value->Sexo}}</td>
                        
                        <td>{{$value->Telefono}}</td>
                        
                        <td>{{$value->Celular}}</td>
                        
                        <td>{{$value->eMail}}</td>
                        
                        <td>{{$value->FechaNac}}</td>
                        
                        <td>{{$value->Domicilio}}</td>
                        
                        <td>{{$value->Localidad}}</td>
                        
                        <td>{{$value->Provincia}}</td>
                        
                        <td>{{$value->Pais}}</td>
                        
                        <td>{{$value->UsuarioUltAct}}</td>
                        
                        <td>{{$value->FechaUltAct}}</td>
                        
                        
                        <td>
                            <div class = 'row'>
                                <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/persona/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/persona/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn-floating orange' data-link = '/persona/{{$value->id}}'><i class = 'material-icons'>info</i></a>
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
