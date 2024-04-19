<?php
    include 'Conta.php';

    $conta1 = new Conta();

    //acessando o atributo privado
    $conta1->setNumero("123.456-7");
    echo " {$conta1->getNumero()}";

    //var_dump($conta1);

?>