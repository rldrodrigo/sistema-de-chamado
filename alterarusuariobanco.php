<?php
    $link = mysqli_connect("localhost", "root", "", "chamado");
    mysqli_set_charset($link, "utf-8");

    $cpf=$_POST['cpf'];
		$nome=$_POST['nome'];
    $tipo = $_POST['tipo'];
    $senha = $_POST['senha'];

    if($nome != ''){
		    $query = "UPDATE usuario SET nome = '$nome' WHERE cpf = '$cpf'";
        mysqli_query($link, $query);
    }
    if($tipo != ''){
      $query = "UPDATE usuario SET tipo = '$tipo' WHERE cpf = '$cpf'";
      mysqli_query($link, $query);
    }

    if($senha != ''){
		    $query = "UPDATE usuario SET senha = '$senha' WHERE cpf = '$cpf'";
        mysqli_query($link, $query);
    }

		mysqli_query($link, $query);
    header('Location: alterarusuario.html');
?>
