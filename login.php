<?php
    $link = mysqli_connect("localhost", "root", "", "chamado");

    mysqli_set_charset($link, "utf-8");


    $cpf=$_POST['cpf'];
    $senha=$_POST['senha'];

    $sql = mysqli_query($link, 'SELECT * from usuario') or die("Erro");
    while($dados=mysqli_fetch_assoc($sql)){
        if($cpf == $dados['cpf'] && $senha == $dados['senha']){
          header('Location: consultachamado.php');
          return;
      }
    }
    echo "Usuário ou senha inválidos";
    header('Location: telalogin.php');
		mysqli_query($link, $query);


?>
