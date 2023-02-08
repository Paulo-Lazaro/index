<?php
session_start();
include_once("database.php");


$codigo = $_POST['id'];

$query = "DELETE FROM utilizador where id = '$codigo'";

mysqli_query($link, $query);

if (mysqli_insert_id($link)){
	
    $_SESSION['msucesso'] = "<h5> Eliminado com sucesso</h5>";
header("Location: listar.php");
}else{

    $_SESSION['merro'] = "<h5>Erro ao Eliminar</h5>";
   header("Location: listar.php");

}
?>