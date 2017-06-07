<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Cliente</h1>
            <form method = 'get' action = 'http://localhost:8000/cliente'>
                <button class = 'btn blue'>Clientes </button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Nombrexx  : </i></b>
                        </td>
                        <td>{{$cliente->Nombre}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Razon Social : </i></b>
                        </td>
                        <td>{{$cliente->RazonSocial}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Domicilo : </i></b>
                        </td>
                        <td>{{$cliente->Domicilo}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Localidad : </i></b>
                        </td>
                        <td>{{$cliente->Localidad}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Provincia : </i></b>
                        </td>
                        <td>{{$cliente->Provincia}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Pais : </i></b>
                        </td>
                        <td>{{$cliente->Pais}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Telefono : </i></b>
                        </td>
                        <td>{{$cliente->Telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$cliente->Celular}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td>{{$cliente->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Contacto : </i></b>
                        </td>
                        <td>{{$cliente->Contacto}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>CUIT : </i></b>
                        </td>
                        <td>{{$cliente->CUIT}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>IIBB : </i></b>
                        </td>
                        <td>{{$cliente->IIBB}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>CondicionIVA : </i></b>
                        </td>
                        <td>{{$cliente->CondicionIVA}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>UsuarioUltAct : </i></b>
                        </td>
                        <td>{{$cliente->UsuarioUltAct}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>FechaUltAct : </i></b>
                        </td>
                        <td>{{$cliente->FechaUltAct}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</html>
