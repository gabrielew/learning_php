<?php

    class Animal {
        
        public function getNome() {
            echo "....!";
        }
    }

    class Dog extends Animal {
         
    }

    $a = new Animal();
    $a->getNome();
    echo "<br>";
    $d = new Dog();
    $d->getNome();