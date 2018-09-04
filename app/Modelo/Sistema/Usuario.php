<?php

namespace WebServiceApp\Modelo\Sistema;

class Usuario
{
    private $Id;
    private $Name;
    private $Descripcion;

    public function getId()
    {
        return $this->Id;
    }

    public function setId($id)
    {
        $this->Id = $id;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName($name)
    {
        $this->Name = $name;
    }

    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }

    public function getDescripcion()
    {
        return $this->Descripcion;
    }

}
