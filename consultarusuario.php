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
      <div id = 'formulario'>
        <table id="tabelausuarios">
          <tr>
            <th> Foto</th>
            <th> Nome</th>
            <th> Cargo</th>
            <th> CPF</th>
          </tr>
        <?php
         $link = mysqli_connect("localhost", "root", "", "chamado");
         mysqli_set_charset($link, "utf-8");

         $cpf=$_POST['cpf'];
         $tipo = $_POST['tipo'];

         $sql = mysqli_query($link, 'SELECT * from usuario') or die("Erro");
         while($dados=mysqli_fetch_assoc($sql)){
             if($cpf == $dados['cpf']){
               echo "<tr>";
               echo "<td width='40px'><img src = 'images/usuario.png' width='auto' height='30px'/></td>";
               echo '<td>'.$dados['nome'].'</td>';
               echo '<td>'.$dados['tipo'].'</td>';
               echo '<td>'.$dados['cpf'].'</td>';
               echo "</tr>";
           }
            if($tipo == $dados['tipo']){
              echo "<tr>";
               echo "<td width='40px'><img src = 'images/usuario.png' width='auto' height='30px'/></td>";
               echo '<td>'.$dados['nome'].'</td>';
               echo '<td>'.$dados['tipo'].'</td>';
               echo '<td>'.$dados['cpf'].'</td>';
               echo "</tr>";
           }
           if($cpf == '' && $tipo == ''){
             echo "<tr>";
               echo "<td width='40px'><img src = 'images/usuario.png' width='auto' height='30px'/></td>";
               echo '<td>'.$dados['nome'].'</td>';
               echo '<td>'.$dados['tipo'].'</td>';
               echo '<td>'.$dados['cpf'].'</td>';
               echo "</tr>";
           }
         }

?>  </table>
      </div>
    </div>
   </body>
</html>
