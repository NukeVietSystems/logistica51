<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Reserva</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Reserva</h1>
            <form method = 'get' action = 'http://localhost:8000/reserva'>
                <button class = 'btn blue'>Reserva Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/reserva'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="input-field col s6">
                    <input id="NroRes" name = "NroRes" type="text" class="validate">
                    <label for="NroRes">NroRes</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="NroDeEnt" name = "NroDeEnt" type="text" class="validate">
                    <label for="NroDeEnt">NroDeEnt</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Clientes" name = "Clientes" type="text" class="validate">
                    <label for="Clientes">Clientes</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="NroAfiliado" name = "NroAfiliado" type="text" class="validate">
                    <label for="NroAfiliado">NroAfiliado</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Titular" name = "Titular" type="text" class="validate">
                    <label for="Titular">Titular</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Derivado" name = "Derivado" type="text" class="validate">
                    <label for="Derivado">Derivado</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Ingreso" name = "Ingreso" type="text" class="validate">
                    <label for="Ingreso">Ingreso</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Egreso" name = "Egreso" type="text" class="validate">
                    <label for="Egreso">Egreso</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Parentesco" name = "Parentesco" type="text" class="validate">
                    <label for="Parentesco">Parentesco</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Medico" name = "Medico" type="text" class="validate">
                    <label for="Medico">Medico</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Especialidad" name = "Especialidad" type="text" class="validate">
                    <label for="Especialidad">Especialidad</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Sanatorio" name = "Sanatorio" type="text" class="validate">
                    <label for="Sanatorio">Sanatorio</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Destino" name = "Destino" type="text" class="validate">
                    <label for="Destino">Destino</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="CantPax" name = "CantPax" type="text" class="validate">
                    <label for="CantPax">CantPax</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="TipoHabitacion" name = "TipoHabitacion" type="text" class="validate">
                    <label for="TipoHabitacion">TipoHabitacion</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="RegimenComida" name = "RegimenComida" type="text" class="validate">
                    <label for="RegimenComida">RegimenComida</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Noches" name = "Noches" type="text" class="validate">
                    <label for="Noches">Noches</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Observaciones" name = "Observaciones" type="text" class="validate">
                    <label for="Observaciones">Observaciones</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Anulado" name = "Anulado" type="text" class="validate">
                    <label for="Anulado">Anulado</label>
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
