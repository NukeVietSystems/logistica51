<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Cliente</h1>
            <form method = 'get' action = 'http://localhost:8000/cliente'>
                <button class = 'btn blue'>Cliente Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/cliente'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="input-field col s6">
                    <input id="Nombre" name = "Nombre" type="text" class="validate">
                    <label for="Nombre">Nombre</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="RazonSocial" name = "RazonSocial" type="text" class="validate">
                    <label for="RazonSocial">RazonSocial</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Domicilo" name = "Domicilo" type="text" class="validate">
                    <label for="Domicilo">Domicilo</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Localidad" name = "Localidad" type="text" class="validate">
                    <label for="Localidad">Localidad</label>
                </div>
                
                <div class="input-field col s6">
                



                   <!-- <input id="Provincia" name = "Provincia" type="text" class="validate">-->
                    

<select id="Provincia" name = "Provincia" class="validate">
    
    <option  value="Buenos Aires">Buenos Aires</option>
    <option  value="Catamarca">Catamarca</option>
    <option  value="Chaco">Chaco</option>
    <option  value="Chubut">Chubut</option>
    <option  value="Córdoba">Córdoba</option>

    <option  value="Corrientes">Corrientes</option>
    <option  value="Entre Ríos">Entre Ríos</option>
    <option  value="Formosa">Formosa</option>
    <option  value="Jujuy">Jujuy</option>
    <option  value="La Pampa">La Pampa</option>

    <option  value="La Rioja">La Rioja</option>
    <option  value="Mendoza">Mendoza</option>
    <option  value="Misiones">Misiones</option>
    <option  value="Neuquén">Neuquén</option>
    <option  value="Río Negro">Río Negro</option>


    <option  value="Salta">Salta</option>
    <option  value="San Juan">San Juan</option>
    <option  value="San Luis">San Luis</option>
    <option  value="Santa Cruz">Santa Cruz</option>
    <option  value="Santa">Santa</option>

    <option  value="Santiago del Estero">Santiago del Estero</option>
    <option  value="Tierra del Fuego, Antártida e Isla del Atlántico Sur">Tierra del Fuego, Antártida e Isla del Atlántico Sur</option>
    <option  value="Tucumán">Tucumán</option>option  value="Buenos Aires">Buenos Aires</option>
    <option  value="Catamarcauenos Aires">Catamarca</option>
    <option  value="Chaco">Chaco</option>
    <option  value="Córdoba">Córdoba</option>
</select> 

                    <label for="Provincia">Provincia</label>





                </div>
                
                <div class="input-field col s6">
                    <input id="Pais" name = "Pais" type="text" class="validate">
                    <label for="Pais">Pais</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Telefono" name = "Telefono" type="text" class="validate">
                    <label for="Telefono">Telefono</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Celular" name = "Celular" type="text" class="validate">
                    <label for="Celular">Celular</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="email" name = "email" type="text" class="validate">
                    <label for="email">email</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="Contacto" name = "Contacto" type="text" class="validate">
                    <label for="Contacto">Contacto</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="CUIT" name = "CUIT" type="text" class="validate">
                    <label for="CUIT">CUIT</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="IIBB" name = "IIBB" type="text" class="validate">
                    <label for="IIBB">IIBB</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="CondicionIVA" name = "CondicionIVA" type="text" class="validate">
                    <label for="CondicionIVA">CondicionIVA</label>
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
