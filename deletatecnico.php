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
              <th> ID</th>
              <th>Nome</th>
              <th>Serviço</th>
              <th> CPF </th>
              <th> Deletar</th>
            </tr>
       <?php
         $link = mysqli_connect("localhost", "root", "", "chamado");
         mysqli_set_charset($link, "utf-8");
         $sql = mysqli_query($link, "SELECT * from tecnico") or die("Erro");
         while($dados=mysqli_fetch_assoc($sql)){
              echo "<tr><form method='POST' name='alterarservicobanco' action='deletartecnico.php'>";
              echo "<td><input class='textField'  name='id' readonly = 'true' value='".$dados['id']."'/></td>";
              echo "<td>".$dados['nome']."</td>";
              echo "<td>".$dados['servico']."</td>";
              echo "<td>".$dados['cpf']."</td>";
              echo "<td><div id='botaoEnviar'>";
              echo "<input type='submit' name='enviar' value='Excluir'>";
              echo "</div>  </td></form></tr>";
         }
         
?>
</table>
         
     </div>

   </body>
</html>
