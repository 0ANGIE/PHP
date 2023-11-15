<?php

class Calculadora
{

    public $n;

    public function __construct(...$n){
        $this->n = $n;
    }

    public function getN(){
        return $this->n;
    }
    
    public function setN($n){
        $this->n = $n;
        return $this;
    }

    public function sumar(...$n){

        $resultado = 0;
        foreach($n as $num){
            $resultado += $num;
        }
        return "El resultado de la suma es: " . $resultado;
    }

    public function restar(...$n){

        $resultado = array_shift($n);
        foreach($n as $num){
            $resultado -= $num;
       }
        return "El resultado de la resta es: " . $resultado;
    }

    public function multiplicar(...$n){
        $resultado = 1;
        foreach ($n as $num) {
            $resultado *= $num;
        }
        if ($resultado == 0) {
            return "El resultado de la multiplicación es: " . $resultado . " ya que hay un vlaor 0 en el array";
        } elseif ($resultado != 0) {
            return "El resultado de la multiplicación es: " . $resultado;
        }
    }

    public function dividir(...$n){
        $resultado = array_shift($n);
        foreach ($n as $num) {
            if ($num == 0) {
                $resultado = 0;
                return ("Hay un 0 en el array, verificar y eleminarlo.");
            } else {
                $resultado /= $num;
            }
        }
        return "El resultado de la división es: " . $resultado; 
    }
}


$objCalculadora = new Calculadora(37, 10);
$numeros = $objCalculadora->getN();
$r = $objCalculadora->multiplicar(...$objCalculadora->n);
echo $objCalculadora->sumar(...$numeros) . PHP_EOL;
echo $objCalculadora->restar(...$numeros) . PHP_EOL;
echo $objCalculadora->multiplicar(...$numeros) . PHP_EOL;
echo $objCalculadora->dividir(...$numeros);

