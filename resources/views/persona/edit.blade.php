<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Persona</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Persona</h1>
            <form method = 'get' action = 'http://localhost:8000/persona'>
                <button class = 'btn blue'>Persona Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/persona/{{$persona->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="input-field col s6">
                    <input id="TipoDoc" name = "TipoDoc" type="text" class="validate" value="{{$persona->TipoDoc}}">
                    <label for="TipoDoc">TipoDoc</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="NroDoc" name = "NroDoc" type="text" class="validate" value="{{$persona->NroDoc}}">
                    <label for="NroDoc">NroDoc</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Apellido" name = "Apellido" type="text" class="validate" value="{{$persona->Apellido}}">
                    <label for="Apellido">Apellido</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Nombre" name = "Nombre" type="text" class="validate" value="{{$persona->Nombre}}">
                    <label for="Nombre">Nombre</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Sexo" name = "Sexo" type="text" class="validate" value="{{$persona->Sexo}}">
                    <label for="Sexo">Sexo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Telefono" name = "Telefono" type="text" class="validate" value="{{$persona->Telefono}}">
                    <label for="Telefono">Telefono</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Celular" name = "Celular" type="text" class="validate" value="{{$persona->Celular}}">
                    <label for="Celular">Celular</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="eMail" name = "eMail" type="text" class="validate" value="{{$persona->eMail}}">
                    <label for="eMail">eMail</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="FechaNac" name = "FechaNac" type="text" class="validate" value="{{$persona->FechaNac}}">
                    <label for="FechaNac">FechaNac</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Domicilio" name = "Domicilio" type="text" class="validate" value="{{$persona->Domicilio}}">
                    <label for="Domicilio">Domicilio</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Localidad" name = "Localidad" type="text" class="validate" value="{{$persona->Localidad}}">
                    <label for="Localidad">Localidad</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Provincia" name = "Provincia" type="text" class="validate" value="{{$persona->Provincia}}">
                    <label for="Provincia">Provincia</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Pais" name = "Pais" type="text" class="validate" value="{{$persona->Pais}}">
                    <label for="Pais">Pais</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="UsuarioUltAct" name = "UsuarioUltAct" type="text" class="validate" value="{{$persona->UsuarioUltAct}}">
                    <label for="UsuarioUltAct">UsuarioUltAct</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="FechaUltAct" name = "FechaUltAct" type="text" class="validate" value="{{$persona->FechaUltAct}}">
                    <label for="FechaUltAct">FechaUltAct</label>
                </div>
                                
                <button class = 'btn red' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
</html>
