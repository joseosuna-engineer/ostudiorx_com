<?php

class EWebUser extends CWebUser{
    protected $_model;
    function isAdmin(){
        $user = $this->loadUser();
        if ($user)
           return $user->rol_usuario==LevelLookUp::ADMIN;
        return false;
    }
    // Load user model.
    protected function loadUser()
    {
        if ( $this->_model === null ) {
                $this->_model = Usuario::model()->findByPk( $this->id );
        }
        return $this->_model;
    }
}

?>