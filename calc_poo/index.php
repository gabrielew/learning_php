<?php

    class Calculadora {

        private $n;

        public function __construct($numeroInicial){
            $this->n = $numeroInicial;
        }

        public function somar($n1){
            $this->n += $n1;
            return $this;
        }

        public function subtrair($n1){
            $this->n -= $n1;
            return $this;
        }

        public function multiplicar($n1){
            $this->n *= $n1;
            return $this;
        }

        public function dividir($n1){
            $this->n /= $n1;
            return $this;
        }

        public function resultado(){
            return $this->n;
        }

        /*public function somar($num1, $num2){
            return $num1 + $num2;
        }

        public function subtrair($num1, $num2){
            return $num1 - $num2;
        }

        public function multiplicar($num1, $num2){
            return $num1 * $num2;
        }

        public function dividir($num1, $num2){
            return $num1 / $num2;
        }*/
    }

    $calc = new Calculadora(10);
    $calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
    $resultado = $calc->resultado();
    echo "Resultado: ".$resultado;
    /*echo "2+10: ".$calc->somar(2, 10)."<br/>";
    echo "2-10: ".$calc->subtrair(2, 10)."<br/>";
    echo "2*10: ".$calc->multiplicar(2, 10)."<br/>";
    echo "10/2: ".$calc->dividir(10, 2)."<br/>";*/
?>