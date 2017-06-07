<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Proveedore</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Proveedore</h1>
            <form method = 'get' action = 'http://localhost:8000/proveedore'>
                <button class = 'btn blue'>Proveedore Index</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Nombre : </i></b>
                        </td>
                        <td>{{$proveedore->Nombre}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>RazonSocial : </i></b>
                        </td>
                        <td>{{$proveedore->RazonSocial}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Domicilio : </i></b>
                        </td>
                        <td>{{$proveedore->Domicilio}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Localidad : </i></b>
                        </td>
                        <td>{{$proveedore->Localidad}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Provincia : </i></b>
                        </td>
                        <td>{{$proveedore->Provincia}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Pais : </i></b>
                        </td>
                        <td>{{$proveedore->Pais}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Telefono : </i></b>
                        </td>
                        <td>{{$proveedore->Telefono}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Celular : </i></b>
                        </td>
                        <td>{{$proveedore->Celular}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email : </i></b>
                        </td>
                        <td>{{$proveedore->email}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Contacto : </i></b>
                        </td>
                        <td>{{$proveedore->Contacto}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>CUIT : </i></b>
                        </td>
                        <td>{{$proveedore->CUIT}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>IIBB : </i></b>
                        </td>
                        <td>{{$proveedore->IIBB}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>CondicionIVA : </i></b>
                        </td>
                        <td>{{$proveedore->CondicionIVA}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Hospedaje : </i></b>
                        </td>
                        <td>{{$proveedore->Hospedaje}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Gastronomico : </i></b>
                        </td>
                        <td>{{$proveedore->Gastronomico}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Transporte : </i></b>
                        </td>
                        <td>{{$proveedore->Transporte}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Otros : </i></b>
                        </td>
                        <td>{{$proveedore->Otros}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>UsuarioUltAct : </i></b>
                        </td>
                        <td>{{$proveedore->UsuarioUltAct}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>FechaUltAct : </i></b>
                        </td>
                        <td>{{$proveedore->FechaUltAct}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
    <script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</html>
