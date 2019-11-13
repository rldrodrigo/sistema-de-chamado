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
    <div id='centro'>

      <table> 
        <tr>
          <th> Foto </th>
          <th> Nome </th>
          <th> Serviço</th>
          <th> CPF</th>
        </tr>
      <?php

       $link = mysqli_connect("localhost", "root", "", "chamado");
       mysqli_set_charset($link, "utf-8");
       $sql = mysqli_query($link, 'SELECT * from tecnico') or die("Erro");
       while($dados=mysqli_fetch_assoc($sql)){

            echo "<tr>";
             echo "<td><img src = 'images/usuario.png' width='auto' height='25px'/></td>";
             echo "<td>".$dados['nome'].'</td>';
             echo '<td>'.$dados['servico'].'</td>';
             echo '<td>'.$dados['cpf'].'</td>';
            echo "</tr>";
    }
?>
    </table>

    </div>
   </body>
</html>
