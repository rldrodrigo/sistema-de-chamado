<?php
    $link = mysqli_connect("localhost", "root", "", "chamado");
    mysqli_set_charset($link, "utf-8");

    $cpf=$_POST['cpf'];
	  $nome=$_POST['nome'];
    $tipo = $_POST['tipo'];
    $senha = $_POST['senha'];


    	$sql = mysqli_query($link, 'SELECT * from usuario') or die("Erro");
         while($dados=mysqli_fetch_assoc($sql)){
             if($cpf == $dados['cpf']){

              include('cadastrausuario.php');
             	echo '<script> alert("CPF já cadastrado!"); </script>';
              return;
           }
       }

		
    $query = "INSERT INTO usuario (cpf, nome, tipo,senha) VALUES ('$cpf','$nome','$tipo','$senha')";
		mysqli_query($link, $query);


    header('Location: cadastrausuario.php');
?>
