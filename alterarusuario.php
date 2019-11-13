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

    <div id='centro'>
      <div id = 'formulario'>
        <?php
          $link = mysqli_connect("localhost", "root", "", "chamado");
          mysqli_set_charset($link, "utf-8");

          $cpf = $_POST['cpf'];

          $sql = mysqli_query($link, "SELECT * from usuario") or die("Erro");
          while($dados=mysqli_fetch_assoc($sql)){

             if($cpf ==$dados['cpf']){

               echo "<form method='POST' name='alterarusuariobanco' action='alterarusuariobanco.php'  >";
               echo "<label> CPF: </label><input class='textField'  name='cpf' readonly = 'true' value='".$cpf."'/>";

               echo "<label> Nome: </label><input type='text' name='nome' placeholder='".$dados['nome']."'>";

               //echo "<label> Tipo: </label><input type='text' name='tipo' placeholder='".$dados['tipo']."'>";
                echo "<label> Tipo: </label><select class='select' name='tipo'>
                    <option value=''> Tipo </option>
                    <option value='Administrador'> Administrador</option>
                    <option value='Técnico'> Técnico </option>
                    <option value='Usuário Comum'>Usuário Comum</option>
               </select>";

              echo "<br><label> Senha: </label><input type='password' name='senha' placeholder='".$dados['senha']."' >";

              echo "<div id='botaoEnviar'>";
              echo "<input type='submit' name='enviar' value='Alterar' id='btnEnviar'>";
              echo "</div>  </form>";
              return;
            }
          }

?>
      </div>
    </div>
   </body>
</html>
