<?php
session_start();
include_once("database.php");

$utilizador = "SELECT * FROM utilizador";

$resultado = mysqli_query($link, $utilizador);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacte-nos</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="formstyle.css">
</head>
<body>
<header>
<div class="bd-example">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">
    <img src="../imagens/ABVSOFT.png" alt="10px" width="180px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../templates/sobre.php">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../templates/produtos.php">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactos</a>
        </li>
      </ul>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <!--End my Favorite until now-->

  <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
</nav>
        </header>
        <main>
            <h1>Contacte-nos</h1> <br>
       <?php
//A seguir comandos para apresentar um feedback do cadastro
            if(isset($_SESSION['msucesso'])){
                echo $_SESSION['msucesso'];
//Serve para anular o isset para a mensagem nao ser apresentada desnecessariamente
                unset ($_SESSION['msucesso']);
            }
             
            if(isset($_SESSION['merror'])){
                echo $_SESSION['merror'];
//Serve para anular o isset para a mensagem nao ser apresentada desnecessariamente
                unset ($_SESSION['merror']);
            }
        ?>
       
    <form class="cadastro" action="processa.php" method="post">
        <label>Nome</label> <br>
        <input type="text" name="Nome" placeholder="ex:Paulo"> <br><br>
        <label>Apelido</label><br>
        <input type="text" name="Apelido" placeholder="Lazaro"> <br><br>
        <label>Genero</label><br>
        <select name="genero">
        <option value="selecione">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select> <br> <br>
        <label>Data de Nascimento</label><br>
        <input type="date" name="data"><br> <br>

        <input type="submit" name="E">
    </form>
    <a href="listar.php">Listar usuarios cadastrados</a>
<br><br>
<footer>
        
            <nav class="navbar navbar-dark bg-dark">
                         <!-- Navbar content -->
                         <section class="text center">
                         <address>
                <p>Contacte nos pelos seguintes canais:</p>
                <figure>
                  <a href="https://wa.me/message/FZTJOUDVFUTFC1">
                  <img src="../imagens/WhatsApp .PNG" width="45" alt="sapp" >
                  </a>
                  <a href="https://www.facebook.com/profile.php?id=100089910469279&mibextid=ZbWKwL">
                    <img src="../imagens/Facebook.png" width="45" alt="face">
                  </a>
                </figure>
                <p>email: abvsoftwares@info.mz</p>
            </address>
            <p>Copyright &copy; ABV/Softwares.inc 2023</p>
            </section>    
            </nav>
        </footer>
    
</body>
</html>