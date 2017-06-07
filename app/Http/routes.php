<?php

/*
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    return view('layout.principal');
});

Route::get('dashboard', function () {
    return view('layout.dashboard');
});


//book Resources
/********************* book ***********************************************/
Route::resource('book','\App\Http\Controllers\BookController');
Route::post('book/{id}/update','\App\Http\Controllers\BookController@update');
Route::get('book/{id}/delete','\App\Http\Controllers\BookController@destroy');
Route::get('book/{id}/deleteMsg','\App\Http\Controllers\BookController@DeleteMsg');
/********************* book ***********************************************/


//julio Resources
/********************* julio ***********************************************/
Route::resource('julio','\App\Http\Controllers\JulioController');
Route::post('julio/{id}/update','\App\Http\Controllers\JulioController@update');
Route::get('julio/{id}/delete','\App\Http\Controllers\JulioController@destroy');
Route::get('julio/{id}/deleteMsg','\App\Http\Controllers\JulioController@DeleteMsg');
/********************* julio ***********************************************/




//persona Resources
/********************* persona ***********************************************/
Route::resource('persona','\App\Http\Controllers\PersonaController');
Route::post('persona/{id}/update','\App\Http\Controllers\PersonaController@update');
Route::get('persona/{id}/delete','\App\Http\Controllers\PersonaController@destroy');
Route::get('persona/{id}/deleteMsg','\App\Http\Controllers\PersonaController@DeleteMsg');
/********************* persona ***********************************************/







//clienta Resources
/********************* clienta ***********************************************/
Route::resource('clienta','\App\Http\Controllers\ClientaController');
Route::post('clienta/{id}/update','\App\Http\Controllers\ClientaController@update');
Route::get('clienta/{id}/delete','\App\Http\Controllers\ClientaController@destroy');
Route::get('clienta/{id}/deleteMsg','\App\Http\Controllers\ClientaController@DeleteMsg');
/********************* clienta ***********************************************/


//proveedore Resources
/********************* proveedore ***********************************************/
Route::resource('proveedore','\App\Http\Controllers\ProveedoreController');
Route::post('proveedore/{id}/update','\App\Http\Controllers\ProveedoreController@update');
Route::get('proveedore/{id}/delete','\App\Http\Controllers\ProveedoreController@destroy');
Route::get('proveedore/{id}/deleteMsg','\App\Http\Controllers\ProveedoreController@DeleteMsg');
/********************* proveedore ***********************************************/




//hospedaje Resources
/********************* hospedaje ***********************************************/
Route::resource('hospedaje','\App\Http\Controllers\HospedajeController');
Route::post('hospedaje/{id}/update','\App\Http\Controllers\HospedajeController@update');
Route::get('hospedaje/{id}/delete','\App\Http\Controllers\HospedajeController@destroy');
Route::get('hospedaje/{id}/deleteMsg','\App\Http\Controllers\HospedajeController@DeleteMsg');
/********************* hospedaje ***********************************************/


//transporte Resources
/********************* transporte ***********************************************/
Route::resource('transporte','\App\Http\Controllers\TransporteController');
Route::post('transporte/{id}/update','\App\Http\Controllers\TransporteController@update');
Route::get('transporte/{id}/delete','\App\Http\Controllers\TransporteController@destroy');
Route::get('transporte/{id}/deleteMsg','\App\Http\Controllers\TransporteController@DeleteMsg');
/********************* transporte ***********************************************/


//otrosservicio Resources
/********************* otrosservicio ***********************************************/
Route::resource('otrosservicio','\App\Http\Controllers\OtrosservicioController');
Route::post('otrosservicio/{id}/update','\App\Http\Controllers\OtrosservicioController@update');
Route::get('otrosservicio/{id}/delete','\App\Http\Controllers\OtrosservicioController@destroy');
Route::get('otrosservicio/{id}/deleteMsg','\App\Http\Controllers\OtrosservicioController@DeleteMsg');
/********************* otrosservicio ***********************************************/

//tarifario Resources
/********************* tarifario ***********************************************/
Route::resource('tarifario','\App\Http\Controllers\TarifarioController');
Route::post('tarifario/{id}/update','\App\Http\Controllers\TarifarioController@update');
Route::get('tarifario/{id}/delete','\App\Http\Controllers\TarifarioController@destroy');
Route::get('tarifario/{id}/deleteMsg','\App\Http\Controllers\TarifarioController@DeleteMsg');
/********************* tarifario ***********************************************/

//usuario Resources
/********************* usuario ***********************************************/
Route::resource('usuario','\App\Http\Controllers\UsuarioController');
Route::post('usuario/{id}/update','\App\Http\Controllers\UsuarioController@update');
Route::get('usuario/{id}/delete','\App\Http\Controllers\UsuarioController@destroy');
Route::get('usuario/{id}/deleteMsg','\App\Http\Controllers\UsuarioController@DeleteMsg');
/********************* usuario ***********************************************/


//modificaciontarifario Resources
/********************* modificaciontarifario ***********************************************/
Route::resource('modificaciontarifario','\App\Http\Controllers\ModificaciontarifarioController');
Route::post('modificaciontarifario/{id}/update','\App\Http\Controllers\ModificaciontarifarioController@update');
Route::get('modificaciontarifario/{id}/delete','\App\Http\Controllers\ModificaciontarifarioController@destroy');
Route::get('modificaciontarifario/{id}/deleteMsg','\App\Http\Controllers\ModificaciontarifarioController@DeleteMsg');
/********************* modificaciontarifario ***********************************************/


//contacto Resources
/********************* contacto ***********************************************/
Route::resource('contacto','\App\Http\Controllers\ContactoController');
Route::post('contacto/{id}/update','\App\Http\Controllers\ContactoController@update');
Route::get('contacto/{id}/delete','\App\Http\Controllers\ContactoController@destroy');
Route::get('contacto/{id}/deleteMsg','\App\Http\Controllers\ContactoController@DeleteMsg');
/********************* contacto ***********************************************/

//ticketgastronomico Resources
/********************* ticketgastronomico ***********************************************/
Route::resource('ticketgastronomico','\App\Http\Controllers\TicketgastronomicoController');
Route::post('ticketgastronomico/{id}/update','\App\Http\Controllers\TicketgastronomicoController@update');
Route::get('ticketgastronomico/{id}/delete','\App\Http\Controllers\TicketgastronomicoController@destroy');
Route::get('ticketgastronomico/{id}/deleteMsg','\App\Http\Controllers\TicketgastronomicoController@DeleteMsg');
/********************* ticketgastronomico ***********************************************/


//entidad Resources
/********************* entidad ***********************************************/
Route::resource('entidad','\App\Http\Controllers\EntidadController');
Route::post('entidad/{id}/update','\App\Http\Controllers\EntidadController@update');
Route::get('entidad/{id}/delete','\App\Http\Controllers\EntidadController@destroy');
Route::get('entidad/{id}/deleteMsg','\App\Http\Controllers\EntidadController@DeleteMsg');
/********************* entidad ***********************************************/




//especialidad Resources
/********************* especialidad ***********************************************/
Route::resource('especialidad','\App\Http\Controllers\EspecialidadController');
Route::post('especialidad/{id}/update','\App\Http\Controllers\EspecialidadController@update');
Route::get('especialidad/{id}/delete','\App\Http\Controllers\EspecialidadController@destroy');
Route::get('especialidad/{id}/deleteMsg','\App\Http\Controllers\EspecialidadController@DeleteMsg');
/********************* especialidad ***********************************************/



//medico Resources
/********************* medico ***********************************************/
Route::resource('medico','\App\Http\Controllers\MedicoController');
Route::post('medico/{id}/update','\App\Http\Controllers\MedicoController@update');
Route::get('medico/{id}/delete','\App\Http\Controllers\MedicoController@destroy');
Route::get('medico/{id}/deleteMsg','\App\Http\Controllers\MedicoController@DeleteMsg');
/********************* medico ***********************************************/


//familiare Resources
/********************* familiare ***********************************************/
Route::resource('familiare','\App\Http\Controllers\FamiliareController');
Route::post('familiare/{id}/update','\App\Http\Controllers\FamiliareController@update');
Route::get('familiare/{id}/delete','\App\Http\Controllers\FamiliareController@destroy');
Route::get('familiare/{id}/deleteMsg','\App\Http\Controllers\FamiliareController@DeleteMsg');
/********************* familiare ***********************************************/


//regimen_comida Resources
/********************* regimen_comida ***********************************************/
Route::resource('regimen_comida','\App\Http\Controllers\Regimen_comidaController');
Route::post('regimen_comida/{id}/update','\App\Http\Controllers\Regimen_comidaController@update');
Route::get('regimen_comida/{id}/delete','\App\Http\Controllers\Regimen_comidaController@destroy');
Route::get('regimen_comida/{id}/deleteMsg','\App\Http\Controllers\Regimen_comidaController@DeleteMsg');
/********************* regimen_comida ***********************************************/


//auditore Resources
/********************* auditore ***********************************************/
Route::resource('auditore','\App\Http\Controllers\AuditoreController');
Route::post('auditore/{id}/update','\App\Http\Controllers\AuditoreController@update');
Route::get('auditore/{id}/delete','\App\Http\Controllers\AuditoreController@destroy');
Route::get('auditore/{id}/deleteMsg','\App\Http\Controllers\AuditoreController@DeleteMsg');
/********************* auditore ***********************************************/


//reserva Resources
/********************* reserva ***********************************************/
Route::resource('reserva','\App\Http\Controllers\ReservaController');
Route::post('reserva/{id}/update','\App\Http\Controllers\ReservaController@update');
Route::get('reserva/{id}/delete','\App\Http\Controllers\ReservaController@destroy');
Route::get('reserva/{id}/deleteMsg','\App\Http\Controllers\ReservaController@DeleteMsg');
/********************* reserva ***********************************************/


//persona Resources
/********************* persona ***********************************************/
Route::resource('persona','\App\Http\Controllers\PersonaController');
Route::post('persona/{id}/update','\App\Http\Controllers\PersonaController@update');
Route::get('persona/{id}/delete','\App\Http\Controllers\PersonaController@destroy');
Route::get('persona/{id}/deleteMsg','\App\Http\Controllers\PersonaController@DeleteMsg');
/********************* persona ***********************************************/


//usuario Resources
/********************* usuario ***********************************************/
Route::resource('usuario','\App\Http\Controllers\UsuarioController');
Route::post('usuario/{id}/update','\App\Http\Controllers\UsuarioController@update');
Route::get('usuario/{id}/delete','\App\Http\Controllers\UsuarioController@destroy');
Route::get('usuario/{id}/deleteMsg','\App\Http\Controllers\UsuarioController@DeleteMsg');
/********************* usuario ***********************************************/


//tarifario Resources
/********************* tarifario ***********************************************/
Route::resource('tarifario','\App\Http\Controllers\TarifarioController');
Route::post('tarifario/{id}/update','\App\Http\Controllers\TarifarioController@update');
Route::get('tarifario/{id}/delete','\App\Http\Controllers\TarifarioController@destroy');
Route::get('tarifario/{id}/deleteMsg','\App\Http\Controllers\TarifarioController@DeleteMsg');
/********************* tarifario ***********************************************/


//cliente Resources
/********************* cliente ***********************************************/
Route::resource('cliente','\App\Http\Controllers\ClienteController');
Route::post('cliente/{id}/update','\App\Http\Controllers\ClienteController@update');
Route::get('cliente/{id}/delete','\App\Http\Controllers\ClienteController@destroy');
Route::get('cliente/{id}/deleteMsg','\App\Http\Controllers\ClienteController@DeleteMsg');
/********************* cliente ***********************************************/


//proveedore Resources
/********************* proveedore ***********************************************/
Route::resource('proveedore','\App\Http\Controllers\ProveedoreController');
Route::post('proveedore/{id}/update','\App\Http\Controllers\ProveedoreController@update');
Route::get('proveedore/{id}/delete','\App\Http\Controllers\ProveedoreController@destroy');
Route::get('proveedore/{id}/deleteMsg','\App\Http\Controllers\ProveedoreController@DeleteMsg');
/********************* proveedore ***********************************************/


//reserva Resources
/********************* reserva ***********************************************/
Route::resource('reserva','\App\Http\Controllers\ReservaController');
Route::post('reserva/{id}/update','\App\Http\Controllers\ReservaController@update');
Route::get('reserva/{id}/delete','\App\Http\Controllers\ReservaController@destroy');
Route::get('reserva/{id}/deleteMsg','\App\Http\Controllers\ReservaController@DeleteMsg');
/********************* reserva ***********************************************/

