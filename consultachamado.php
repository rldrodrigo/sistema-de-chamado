<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Sistema de Chamados</title>
       <link rel="stylesheet" type="text/css"  href="estilo.css" />
       <link rel="stylesheet" type="text/css"  href="estilomenulateral.css" />
       <link rel="stylesheet" type="text/css"  href="estiloform.css" />
       <link rel="stylesheet" type="text/css"  href="estilotabela.css" />
   </head>
   <body>
     <?php
      include('menuprincipal.php');
      include('menulateral.php');

     ?>
    <div id='centro'>
      <table>
        <tr>
          <th> ID </th>
          <th> Título </th>
          <th> Prioridade </th>
          <th> Técnico </th>
          <th> Categoria </th>
          <th> Status </th>
        </tr>
        <?php
        $link = mysqli_connect("localhost", "root", "", "chamado");
        mysqli_set_charset($link, "utf-8");
        $sql = mysqli_query($link, 'SELECT * from chamado') or die("Erro");
        while($dados=mysqli_fetch_assoc($sql)){
            echo "<tr>";
            echo "<td>".$dados['id']."</td>";
            echo "<td>".$dados['titulo']."</td>";
            if ($dados['prioridade'] == 1){
              echo "<td bgcolor='red'> Alta</td>";
            } else if($dados['prioridade'] == 2){
              echo "<td bgcolor='yellow'> Média </td>";
            }else if($dados['prioridade'] == 3){
              echo "<td bgcolor='green'> Baixa</td>";
            }


            echo "<td>".$dados['tecnico']."</td>";
            echo "<td>".$dados['categoria']."</td>";
            echo "<td>".$dados['status']."</td>";
            echo "</tr>";
        }
        ?>
      </table>

    </div>
   </body>
</html>
