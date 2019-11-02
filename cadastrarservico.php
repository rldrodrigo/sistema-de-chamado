<?php

    $link = mysqli_connect("localhost", "root", "", "chamado");

    mysqli_set_charset($link, "utf-8");


    $nome=$_POST['nome'];
		$descricao=$_POST['descricao'];


		$query = "INSERT INTO servico (nome, descricao) VALUES ('$nome', '$descricao')";

		mysqli_query($link, $query);

    header('Location: cadastraservico.php');
?>
