<?php

namespace WebServiceApp\ReglaNegocio\Sistema;

use WebServiceApp\Modelo\Sistema\Usuario;
use WebServiceApp\AccesoDatos\Sistema\UsuarioAD;

class UsuarioRN
{
    public function getUser($id)
    {
        $_usuarioAd = new UsuarioAD();
        try{
            $usuario = new Usuario();
            $usuario = $_usuarioAd->getUser($id);
        }catch($ex){
            return $ex;
        }
    }
}
