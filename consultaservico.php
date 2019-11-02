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

     <div id = 'formulario'>
       <?php


        //$cn = mysqli_connect('localhost','','') or die("ERRO NA CONEXÃO COM O MYSQL");
        $link = mysqli_connect("localhost", "root", "", "chamado");
        //mysql_select_db('salao',$link) or die("ERRO NA CONEXÃO COM O BANCO DE DADOS");
        mysqli_set_charset($link, "utf-8");


        $sql = mysqli_query($link, 'SELECT * from servico') or die("Erro");
        while($dados=mysqli_fetch_assoc($sql)){
            echo "<div class='servico'>";
              echo "<div class='dados'> ";
              echo "<br><label> Nome: </label>";
              echo $dados['nome'].'<br>';
              echo "<label> Cargo: </label>";
              echo $dados['descricao'].'<br>';
              echo "</div>";
            echo "</div>";
        }

?>
     </div>

   </body>
</html>
