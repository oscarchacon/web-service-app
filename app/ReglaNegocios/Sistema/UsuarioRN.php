<?php

namespace WebServiceApp\ReglaNegocio\Sistema;

use WebServiceApp\Modelo\Sistema\Usuario;
use WebServiceApp\AccesoDatos\Sistema\UsuarioAD;

class UsuarioRN
{
    public function getUser($id)
    {
        try{
            $_usuarioAd = new UsuarioAD();
            $usuario = new Usuario();
            $usuario = $_usuarioAd->getUser($id);
        }catch(Exception $e){
            return $e;
        }
    }
}
