<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Persona</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Persona</h1>
            <form method = 'get' action = 'http://localhost:8000/persona'>
                <button class = 'btn blue'>Persona Index</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>TipoDoc : </i></b>
                        </td>
                        <td>{{$persona->TipoDoc}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>NroDoc : </i></b>
                        </td>
                        <td>{{$persona->NroDoc}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Apellido : </i></b>
                        </td>
                        <td>{{$persona->Apellido}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nombre : </i></b>
                        </td>
                        <td>{{$persona->Nombre}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Sexo : </i></b>
                        </td>
                        <td>{{$persona->Sexo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Telefono : </i></b>
                        </td>
                        <td>{{$persona->Telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$persona->Celular}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>eMail : </i></b>
                        </td>
                        <td>{{$persona->eMail}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>FechaNac : </i></b>
                        </td>
                        <td>{{$persona->FechaNac}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Domicilio : </i></b>
                        </td>
                        <td>{{$persona->Domicilio}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Localidad : </i></b>
                        </td>
                        <td>{{$persona->Localidad}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Provincia : </i></b>
                        </td>
                        <td>{{$persona->Provincia}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Pais : </i></b>
                        </td>
                        <td>{{$persona->Pais}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>UsuarioUltAct : </i></b>
                        </td>
                        <td>{{$persona->UsuarioUltAct}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>FechaUltAct : </i></b>
                        </td>
                        <td>{{$persona->FechaUltAct}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</html>
