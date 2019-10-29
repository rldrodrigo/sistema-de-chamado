<?php



    $link = mysqli_connect("localhost", "root", "", "chamado");

    mysqli_set_charset($link, "utf-8");


    $cpf=$_POST['cpf'];
		$nome=$_POST['nome'];
    $tipo = $_POST['tipo'];
    $senha = $_POST['senha'];


		$query = "INSERT INTO usuario (cpf, nome, tipo,senha) VALUES ('$cpf','$nome','$tipo','$senha')";

		mysqli_query($link, $query);

    header('Location: cadastrarusuario.html');
?>
