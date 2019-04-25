<?php

    require 'namespaceV1.php';
    require 'namespaceV2.php';

    $sobre = new \aplicacao\v1\Sobre();

    echo "Version: ".$sobre->getVersion();