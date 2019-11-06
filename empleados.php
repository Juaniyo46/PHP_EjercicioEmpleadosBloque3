<?php

public class Empleado
{
    public $nombre;
    public $edad;
    public $salario;

    public const PLUS = 300;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre()
    {
        $this->nombre = $nombre;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad()
    {
        $this->edad = $edad;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario()
    {
        $this->salario = $salario;
    }


}


?>