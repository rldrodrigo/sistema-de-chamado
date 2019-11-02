<?php
    $link = mysqli_connect("localhost", "root", "", "chamado");
    mysqli_set_charset($link, "utf-8");


    $id=$_POST['id'];
		$titulo=$_POST['titulo'];
    $prioridade = $_POST['prioridade'];
    $tecnico = $_POST['tecnico'];
    $categoria = $_POST['categoria'];
    $status = $_POST['status'];



    if($titulo != ''){
		    $query = "UPDATE chamado SET titulo = '$nome' WHERE id = '$id'";
        mysqli_query($link, $query);
    }
    if($prioridade != ''){
      $query = "UPDATE chamado SET prioridade = '$prioridade' WHERE id = '$id'";
      mysqli_query($link, $query);
    }

    if($tecnico != ''){
		    $query = "UPDATE chamado SET tecnico = '$tecnico' WHERE id = '$id'";
        mysqli_query($link, $query);
    }
    if($categoria != ''){
		    $query = "UPDATE chamado SET categoria = '$categoria' WHERE id = '$id'";
        mysqli_query($link, $query);
    }

    if($status != ''){
		    $query = "UPDATE chamado SET status = '$status' WHERE id = '$id'";
        mysqli_query($link, $query);
    }

		mysqli_query($link, $query);


    header('Location: consultachamado.php');
?>
