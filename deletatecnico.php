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
         $link = mysqli_connect("localhost", "root", "", "chamado");
         mysqli_set_charset($link, "utf-8");
         $sql = mysqli_query($link, "SELECT * from tecnico") or die("Erro");
         while($dados=mysqli_fetch_assoc($sql)){
              echo "<form method='POST' name='alterarservicobanco' action='deletartecnico.php'  >";
              echo "<label> id: </label><input class='textField'  name='id' readonly = 'true' value='".$dados['id']."'/>";
              echo "<label> Nome: </label><input type='text'  name='nome'  readonly = 'true' placeholder='".$dados['nome']."'/>";
              echo "<label> Serviço: </label><input type='text'  name='servico'  readonly = 'true' placeholder='".$dados['servico']."'/>";
            echo "<label> CPF: </label><input type='text' name='cpf'readonly = 'true'  placeholder='".$dados['cpf']."'/>";

              echo "<div id='botaoEnviar'>";
              echo "<input type='submit' name='enviar' value='Excluir' id='btnEnviar'>";
              echo "</div>  </form>";
         }

?>
     </div>

   </body>
</html>
