<?php

class Calculadora{

private $n1;
private $n2;

    function __construct($n1, $n2){
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

public function setNumero1($n1){
    $this->n1 = $n1;
    return $this;
}

public function getNumero1(){
    return $this->n1;
}

public function setNumero2($n2){
    $this->n2 = $n2;
    return $this;
}

public function getNumero2(){
    return $this->n2;
}

public function sumar($n1, $n2){
    $resultado = $n1 + $n2;
    return $resultado;
}

public function restar($n1, $n2){
    $resultado = $n1 - $n2;
    return $resultado;
}

public function multiplicar($n1, $n2){
    $resultado = $n1 * $n2;
    return $resultado;
}

public function dividir($n1, $n2){
    $resultado = $n1 / $n2;
    return $resultado;
}

}

$objCalculadora=new Calculadora(5,2);
$p = $objCalculadora->getNumero1();
$s = $objCalculadora->getNumero2();
echo "el resulatdo de la suma es: " . $objCalculadora->sumar($p, $s) . PHP_EOL;
echo "el resultado de la resta es: " . $objCalculadora->restar($p, $s) . PHP_EOL;
echo "el resultado de la multiplicación es: ". $objCalculadora->multiplicar($p, $s) . PHP_EOL;
echo "El resultado de la división es: " . $objCalculadora->dividir($p, $s) . PHP_EOL; 