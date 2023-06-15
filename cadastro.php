<?php
include("conexao.php");

$nome=$_POST('nome');
$email=$_POST('email');
$senha=$_POST('senha');

$sql = "INSIRE INTO poo (nome,email,senha) VALUE('$nome','$email','$senha')";

if (mysqli_query($conexao,$sql)){
    echo "deucerto n oh".mysqli_connect_error();
}
else{
    echo"ai é bom demaise";
}
?>