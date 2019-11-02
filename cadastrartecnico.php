<?php
    $link = mysqli_connect("localhost", "root", "", "chamado");

    mysqli_set_charset($link, "utf-8");


    $cpf=$_POST['cpf'];
		$nome=$_POST['nome'];
    $servico = $_POST['servico'];

		$query = "INSERT INTO tecnico (cpf, nome, servico) VALUES ('$cpf','$nome','$servico')";

		mysqli_query($link, $query);

    header('Location: cadastratecnico.php');
?>
