<?php

    abstract class Animal {
        private $name;
        private $yearsOld;

        abstract protected function andar();

        public function setName($n) {
            $this->name = $n;
        }

        public function getName() {
            return $this->name;
        }

    }

    class Cavalo extends Animal {
        private $qtd_patas;
        private $tipo_pelo;

        public function andar() {

        }
    }


    $cavalo = new Cavalo();
    $cavalo->setName("Teste1");

    echo "Nome: ".$cavalo->getName();