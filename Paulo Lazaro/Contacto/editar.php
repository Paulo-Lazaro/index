<?php
session_start();
include_once("database.php");

$codigo = $_POST['id'];
$query = "UPDATE FROM utilizador where id = '$codigo'";
$query_run

mysqli_query($link, $query);

if (mysqli_insert_id($link)){
	
    $_SESSION['msucesso'] = "<h5> Atualizado com sucesso!</h5>";
header("Location: index.php");
}else{

    $_SESSION['merro'] = "<h5>Erro ao atualizar!</h5>";
   header("Location: index.php");

}
?>