<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuarioController
 *
 * @author  The scaffold-interface created at 2016-07-18 07:08:42pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Usuario extends Model implements 	AuthenticatableContract,
                                    	AuthorizableContract,
                                    	CanResetPasswordContract
{

	use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'usuarios';

    protected $fillable = [ 'Legajo', 'Apellido', 'Nombres', 'Usuario', 'Telefono', 'email', 'tipo'];

    protected $hidden = ['password', 'remember_token'];

	}
