<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Sistema de Chamados</title>
       <link rel="stylesheet" type="text/css"  href="css/estilo.css" />
       <link rel="stylesheet" type="text/css"  href="css/estilomenulateral.css" />
       <link rel="stylesheet" type="text/css"  href="css/estiloform.css" />
       <link rel="stylesheet" type="text/css" href="css/estilotabela.css">
   </head>
   <body>
     <?php
      include('menuprincipal.php');
      include('menulateral.php');
     ?>

     <div id = 'formulario'>

      <table>
        <tr>
          <th> Nome </th>
          <th> Descrição </th>
        </tr>
       <?php
        $link = mysqli_connect("localhost", "root", "", "chamado");
        mysqli_set_charset($link, "utf-8");
        $sql = mysqli_query($link, 'SELECT * from servico') or die("Erro");
        while($dados=mysqli_fetch_assoc($sql)){
              echo "<tr>";
              echo "<td>".$dados['nome'].'</td>';
              echo "<td>".$dados['descricao'].'</td>';
              echo "</tr>";
        }
      

?>  </table>
     </div>

   </body>
</html>
