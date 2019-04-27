<?php

    $array = array(1,2,3,4,5,6);

    print_R($array);
    echo '<br>';
    echo $array[1];
    echo '<br>';

    foreach($array as $a)
        echo $a;

    #chaves:

    echo '<br>';

    $variavel = array("A"=>"abacaxi", "B"=> "bola");
    
    print_r($variavel);
    echo '<br>';

    foreach($variavel as $b)
        echo $b, " ";