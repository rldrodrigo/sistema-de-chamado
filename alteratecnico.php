<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Sistema de Chamados</title>
       <link rel="stylesheet" type="text/css"  href="css/estilo.css" />
       <link rel="stylesheet" type="text/css"  href="css/estilomenulateral.css" />
       <link rel="stylesheet" type="text/css"  href="css/estiloform.css" />
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
              echo "<form method='POST' name='alterarservicobanco' action='alterartecnicobanco.php'  >";
              echo "<h1 class = 'tituloform'> Alterar Técnico </h1>";
              echo "<label> id: </label><input class='textField'  name='id' readonly = 'true' value='".$dados['id']."'/>";
              echo "<label> Nome: </label><input type='text'  name='nome'  placeholder='".$dados['nome']."'/>";
              echo "<label> Serviço: </label><select class='select' name='servico'>";
              $sql1 = mysqli_query($link, 'SELECT * from servico') or die("Erro");
              while($dados1=mysqli_fetch_assoc($sql1)){
                    echo "<option value='".$dados1['nome']."'>".$dados1['nome']."</option>";
                  }
            echo "</select><br>";
            echo "<label> CPF: </label><input type='text' name='cpf' placeholder='".$dados['cpf']."'/>";

              echo "<div id='botaoEnviar'>";
              echo "<input type='submit' name='enviar' value='Alterar' id='btnEnviar'>";
              echo "</div>  </form>";
         }

?>
     </div>

   </body>
</html>
