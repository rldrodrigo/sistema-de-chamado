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


         $sql = mysqli_query($link, "SELECT * from servico") or die("Erro");
         while($dados=mysqli_fetch_assoc($sql)){
              echo "<form method='POST' name='alterarservicobanco' action='alterarservicobanco.php'  >";
              echo "<label> ID: </label><input class='textField'  name='id' readonly = 'true' value='".$dados['id']."'/>";
              echo "<label> Nome: </label><input type='text'  name='nome'  placeholder='".$dados['nome']."'/>";
              echo "<label> Descrição: </label><input type='text' name='descricao' placeholder='".$dados['descricao']."'/>";
              echo "<div id='botaoEnviar'>";
              echo "<input type='submit' name='enviar' value='Alterar' id='btnEnviar'>";
              echo "</div>  </form>";
         }

?>
     </div>

   </body>
</html>
