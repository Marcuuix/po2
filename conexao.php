<?php


$host='localhost';
$pessoa='root';
$senha='';
$bd='marcus';

$conexao=mysqli_connect($host,$pessoa,$senha,$bd);
    if(!$conexao){
        echo "vc é foda";
    }

    else{
        echo "algo deu errado boy".mysqli_connect_error();
    }
?>