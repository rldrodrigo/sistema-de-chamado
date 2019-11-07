<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Sistema de Chamados</title>
       <link rel="stylesheet" type="text/css"  href="css/telalogin.css" />
   </head>
   <body>
     <?php
      ?>
      <div class='container'>
        <div class='box'>
        <form method="POST" name="alterarusuario" action="login.php" >
          <label> CPF: </label><input type="text" name="cpf" placeholder="CPF" required><br>
          <label> Senha: </label><input type="password" name="senha" placeholder="Senha" required><br>
          <input type="submit" name="enviar1" value="Entrar" id="btnEnviar">
        </form>
      </div>
      </div>
      </table>

    </div>
   </body>
</html>
