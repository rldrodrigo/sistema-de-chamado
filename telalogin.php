<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
       <meta charset="utf-8"/>
       <title>Sistema de Chamados</title>
       <link rel="stylesheet" type="text/css"  href="css/telalogin.css" />
   </head>
   <body>
      <h1> SISTEMA DE CHAMADOS </h1>
      <div class='container'>
        <div class='box'>
        <form method="POST" name="alterarusuario" action="login.php" >
          <label> CPF: </label><br><input type="text" class='entradadedados' name="cpf" placeholder="CPF" required><br>
          <label> Senha: </label><br><input type="password" class='entradadedados' name="senha" placeholder="Senha" required><br>
          <input type="submit" class='botaoEntrar' value="Entrar" id="btnEnviar">
        </form>
      </div>
      </div>
      </table>
      
    </div>
   </body>
</html>
