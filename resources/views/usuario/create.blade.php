<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Usuario</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Usuario</h1>
            <form method = 'get' action = 'http://localhost:8000/usuario'>
                <button class = 'btn blue'>Usuario Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/usuario'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="input-field col s6">
                    <input id="Legajo" name = "Legajo" type="text" class="validate">
                    <label for="Legajo">Legajo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Apellido" name = "Apellido" type="text" class="validate">
                    <label for="Apellido">Apellido</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Nombres" name = "Nombres" type="text" class="validate">
                    <label for="Nombres">Nombres</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Usuario" name = "Usuario" type="text" class="validate">
                    <label for="Usuario">Usuario</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Telefono" name = "Telefono" type="text" class="validate">
                    <label for="Telefono">Telefono</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="email" name = "email" type="text" class="validate">
                    <label for="email">email</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Activo" name = "Activo" type="text" class="validate">
                    <label for="Activo">Activo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="UsuarioUltAct" name = "UsuarioUltAct" type="text" class="validate">
                    <label for="UsuarioUltAct">UsuarioUltAct</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="FechaUltAct" name = "FechaUltAct" type="text" class="validate">
                    <label for="FechaUltAct">FechaUltAct</label>
                </div>
                
                
                <button class = 'btn red' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
</html>
