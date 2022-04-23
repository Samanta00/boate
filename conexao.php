<?php

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="boate_comentarios";
$conexao=mysqli_connect($servidor,$usuario,$senha,$dbname);


if(!$conexao){
    echo 'não foi possível conectar ao banco de dados';
}
else{
    echo'Está conectado ao banco de dados';
}




