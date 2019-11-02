<?php


    //$cn = mysqli_connect('localhost','','') or die("ERRO NA CONEXÃO COM O MYSQL");
    $link = mysqli_connect("localhost", "root", "", "chamado");
    //mysql_select_db('salao',$link) or die("ERRO NA CONEXÃO COM O BANCO DE DADOS");
    mysqli_set_charset($link, "utf-8");

    $id = $_POST['id'];
		$nome=$_POST['nome'];
    $descricao = $_POST['descricao'];


    if($nome != ''){
		    $query = "UPDATE servico SET nome = '$nome' WHERE id = '$id'";
        mysqli_query($link, $query);
    }
    if($descricao != ''){
      $query = "UPDATE servico SET descricao = '$descricao' WHERE id = '$id'";
      mysqli_query($link, $query);
    }

		mysqli_query($link, $query);


    header('Location: alteraservico.php');
?>
