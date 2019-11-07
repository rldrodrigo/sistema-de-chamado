<table>
  <tr>
    <th> ID </th>
    <th> Título </th>
    <th> Prioridade </th>
    <th> Técnico </th>
    <th> Categoria </th>
    <th> Hora </th>
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
      echo "<td>".$dados['hora']."</td>";
      echo "<td>".$dados['status']."</td>";
      echo "</tr>";
  }
  ?>
</table>
