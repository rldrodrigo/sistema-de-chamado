<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Sistema de Chamados</title>
       <link rel="stylesheet" type="text/css"  href="estilo.css" />
       <link rel="stylesheet" type="text/css"  href="estilomenulateral.css" />
       <link rel="stylesheet" type="text/css"  href="estiloform.css" />
   </head>
   <body>
     <?php
      include('menuprincipal.php');
      include('menulateral.php');
     ?>
    <div id='centro'>
      <?php

       $link = mysqli_connect("localhost", "root", "", "chamado");
       mysqli_set_charset($link, "utf-8");
       $sql = mysqli_query($link, 'SELECT * from tecnico') or die("Erro");
       while($dados=mysqli_fetch_assoc($sql)){

            echo "<div class='usuario'>";
             echo "<img src = 'images/usuario.png' width='auto' height='100px'/>";
             echo "<div class='dados'> ";
             echo "<br><label> Nome: </label>";
             echo $dados['nome'].'<br>';
             echo "<label> Serviço: </label>";
             echo $dados['servico'].'<br>';
             echo "<label> CPF: </label>";
             echo $dados['cpf'].'<br>';
             echo "</div>";
           echo "</div>";
    }
?>

    </div>
   </body>
</html>
