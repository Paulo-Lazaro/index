<?php
//Codigo base e fundamental para fazer a connection entre form e database
$host = 'localhost' ;//localhost por ser no servidor local
$user = 'root'; //comando padrao
$pass = ''; //password da database
$db = 'utilizador'; //nome da database atribuida dentro da tabela criada

$link = mysqli_connect($host, $user, $pass,$db);
?>