<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	
	public function authenticate()
	{
		// trae de la base de datos del Modelo del usuario Usuario, busca por atributos en su tabla
		// una columna llamada identificador_usuario
		$registro=Usuario::model()->findByAttributes(array('identificador_usuario'=>$this->username));
		
		if($registro===null) // no lo encontró
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($registro->clave_usuario!==$this->password) // contraseña invalida md5($this->password)) para encriptar
            $this->errorCode=self::ERROR_PASSWORD_INVALID; // if($registro->clave_usuario!==md5($this->password))
		else // lo encontró
        {
            $this->_id=$registro->cedula_usuario;
			$this->username = $registro->nombre_usuario;
            $this->errorCode=self::ERROR_NONE;
        }
		return !$this->errorCode;
	}
	
	public function getId()
    {
        return $this->_id;
    }
}