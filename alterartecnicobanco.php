<?php

    $link = mysqli_connect("localhost", "root", "", "chamado");
    mysqli_set_charset($link, "utf-8");

    $id = $_POST['id'];
		$nome=$_POST['nome'];
    $cpf = $_POST['cpf'];
    $servico=$_POST['servico'];

    if($nome != ''){
		    $query = "UPDATE tecnico SET nome = '$nome' WHERE id = '$id'";
        mysqli_query($link, $query);
    }
    if($cpf != ''){
      $query = "UPDATE tecnico SET cpf = '$cpf' WHERE id = '$id'";
      mysqli_query($link, $query);
    }

    if($servico != ''){
      $query = "UPDATE tecnico SET servico = '$servico' WHERE id = '$id'";
      mysqli_query($link, $query);
    }

		mysqli_query($link, $query);


    header('Location: alteratecnico.php');
?>
