<?php

    interface Animal {

        public function andar();

    }

    class Dog implements Animal {
        
        public function andar() {
            echo "..";
        }
    }

    $dog = new Dog();
    $dog->andar();