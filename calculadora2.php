<?php

class Calculadora
{

    private $a;

    function __construct(...$a)
    {
        $this->a = $a;

    }

    function setA($a)
    {
        $array[]=$this->a;
        return $array;
    }


    function sumar()
    {

    }

    function restar()
    {
       
    }

    function multiplicar()
    {
        
    }

    function dividir()
    {
        
    }
}


$objCalculadora = new Calculadora(37, 10);
echo $objCalculadora->sumar();
// echo $objCalculadora->restar();
// echo $objCalcualdora->multiplicar();
// echo $objCalculadora->dividir();
