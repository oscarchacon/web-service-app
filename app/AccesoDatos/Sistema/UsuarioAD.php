<?php

namespace WebServiceApp\AccesoDatos\Sistema;
Use DB;

class UsuarioAD
{

    public function getUser($id)
    {
        $query = DB::select('select  *
                            from    User
                            where   id = :id', ['id' => $id]);

        return $query;
    }
}
