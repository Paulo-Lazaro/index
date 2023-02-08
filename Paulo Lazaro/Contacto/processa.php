<?php
session_start();
include_once("database.php");
$na = $_POST["Nome"];
$ap = $_POST["Apelido"];
$gn = $_POST["genero"];
$dt = $_POST["data"];
//Abaixo, comando para inserir condicoes no code
/*if($name=="sobre"){
    header("Location: sobre.php");
}elseif ($name=="somos"){
    header("Location: somos.php");
}*/
//echo "Nome:$na <br> Apelido:$ap <br> Genero:$gn<br> Data de nascimento:$dt";
//Abaixo comando para alocar os dados no database
$query = "INSERT into utilizador(nome, apelido,genero,data) VALUES ('$na', '$ap', '$gn', '$dt')";

//Abaixo comando para executar as tarefas anteriores
mysqli_query($link, $query);
//Comando verrifica se houve atualizacao de informacao na tabela
if (mysqli_insert_id($link)){

    $_SESSION['msucesso'] = "<h5>Cadastrado com Sucesso</h5>";
    header("Location:index.php ");

}else{

    $_SESSION['merror'] = "<h5>Erro ao cadastrar</h5>";
    header("Location: index.php");
}

// Area de Editar o cadastro


if(isset($_POST['update_utilizador']))
{
	$utilizador_id = mysqli_real_escape_string($link, $_POST['utilizador_id']);

	$nome = mysqli_real_escape_string($link, $_POST['name']);
	$apelido = mysqli_real_escape_string($link, $_POST['surname']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$phone = mysqli_real_escape_string($link, $_POST['phone']);
	$course = mysqli_real_escape_string($link, $_POST['course']);

	$query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' 
				WHERE id='$student_id'";
	$query_run = mysqli_query($link, $query);

	if($query_run)
	{
		$_SESSION['message'] = "Estudante Actualizado Com Sucesso.";
		header("Localtion: student-create.php");
		exit(0);
	}
	else
	{
		$_SESSION['message'] = "Estudante Nao Actualizado Com Sucesso.";
		header("Localtion: student-create.php");
		exit(0);
	}

}


header("Location:index.php");
?>