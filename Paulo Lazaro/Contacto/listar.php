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
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script> src="jquery-3.2.0.min.js"</script>
</head>

<body>
    <div class="form-group">
        <div class="form-group col-md-12 widget-left">
            <input type="text" id="psq" class="form-control" placeholder="Pesquisar">
        </div>
    </div>
<table border="2">
            <thead>
                <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Gênero</th>
                <th>Data de Nascimento</th>
                <th>Deletar</th>
                <th>Editar</th>
                </tr>
            </thead>
            <tbody id="data">
                <?php
//Percorre a tabela e repete os resultados(faz a incrementacao)
                while($linhas = mysqli_fetch_assoc($resultado)){
                ?>

                <tr>
                    <td><?php echo $linhas['id']; ?></td>
                    <td><?php echo $linhas['Nome']; ?></td>
                    <td><?php echo $linhas['Apelido']; ?></td>
                    <td><?php echo $linhas['Genero']; ?></td>
                    <td><?php echo $linhas['Data']; ?></td>
                    <td>
                     <form action="eliminar.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $linhas['id']; ?>">
                        <input type="submit" value="Eliminar">
                     </form>
                    </td>  
                    <td>
                        <form action="editar.php" method="POST">
                            <input type="hidden"name="id" value="<?php echo $linhas['id'];?>">
                            <input type="submit" value="Editar">
                        </form>
                        
                    </td>              
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#psq").on("keyup", function () 
            {
                var value = $(this).val().toLowerCase();
                $("#data tr").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)  
            });
        });
    });
    </script>
</body>
</html>