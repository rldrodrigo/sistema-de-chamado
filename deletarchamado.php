<?php
          $link = mysqli_connect("localhost", "root", "", "chamado");
          mysqli_set_charset($link, "utf-8");

          $id = $_POST['id'];
          

          $sql = mysqli_query($link, 'SELECT * from chamado') or die("Erro");
       	 while($dados=mysqli_fetch_assoc($sql)){
            if(($dados['id'] == $id) && (strcasecmp($dados['status'],'Resolvido')) == 0){
            	include('consultachamado.php');
    			     echo '<script> alert("Não é possível excluir um chamado resolvido"); </script>';
    			     return;
            }         
        }

        $deleta = "DELETE FROM chamado WHERE id = '$id'";
        mysqli_query($link,$deleta) or die ("Erro");

        header('Location: consultachamado.php');
?>
