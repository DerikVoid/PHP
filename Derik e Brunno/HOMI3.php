<?php
//Array
$produtos = [
    "maçã"=>1.99,
    "uva"=>7.99,
    "laranja"=>2.49];
    //Exibir preços
    echo "Lista de preços:\n ";
        foreach ($produtos as $produto => $preço) {
            echo $produto." custa R$ ".$preço."\n";
        }
    //Calculando o total
    $total = 0;
    foreach ($produto as $preço) {
        $total += $preço;
    }
    echo "Total: R$".$total;
?>