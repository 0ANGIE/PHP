<?php

class Calculadora{

private $a;
private $b;

function __construct($a, $b){
    $this->a=$a;
    $this->b=$b;
}

function getA($a){
    return $this->a;
}

function getB($b){
    return $this->b;
}

function sumar(){
    return $this->a+$this->b;
}

function restar(){
    return $this->a-$this->b;
}

function multiplicar(){
    return $this->a*$this->b;
}

function dividir(){
    return $this->a/$this->b;
}

}

$objCalculadora=new Calculadora(37,10);
echo $objCalculadora->sumar() . PHP_EOL;
echo $objCalculadora->restar() . PHP_EOL;
echo $objCalcualdora->multiplicar() . PHP_EOL;
echo $objCalculadora->dividir() . PHP_EOL; 