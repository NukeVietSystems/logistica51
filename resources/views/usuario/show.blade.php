<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Usuario</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Usuario</h1>
            <form method = 'get' action = 'http://localhost:8000/usuario'>
                <button class = 'btn blue'>Usuario Index</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Legajo : </i></b>
                        </td>
                        <td>{{$usuario->Legajo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Apellido : </i></b>
                        </td>
                        <td>{{$usuario->Apellido}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nombres : </i></b>
                        </td>
                        <td>{{$usuario->Nombres}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Usuario : </i></b>
                        </td>
                        <td>{{$usuario->Usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Telefono : </i></b>
                        </td>
                        <td>{{$usuario->Telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td>{{$usuario->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Activo : </i></b>
                        </td>
                        <td>{{$usuario->Activo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>UsuarioUltAct : </i></b>
                        </td>
                        <td>{{$usuario->UsuarioUltAct}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>FechaUltAct : </i></b>
                        </td>
                        <td>{{$usuario->FechaUltAct}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</html>
