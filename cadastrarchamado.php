<?php
    $link = mysqli_connect("localhost", "root", "", "chamado");

    mysqli_set_charset($link, "utf-8");


    $titulo=$_POST['titulo'];
    $prioridade=$_POST['prioridade'];
    $tecnico=$_POST['tecnico'];
    $categoria=$_POST['categoria'];
    $status = 'Pendente';

		$query = "INSERT INTO chamado (titulo, prioridade, tecnico, categoria, status) VALUES ('$titulo','$prioridade','$tecnico', '$categoria','$status')";

		mysqli_query($link, $query);

    header('Location: consultachamado.php');
?>
