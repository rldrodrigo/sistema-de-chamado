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
    <div id='centro'>
      <div id = 'formulario'>
        <form method="POST" name="alterarusuario" action="alterarusuario.php" >
         <label> CPF: </label><input type="text" name="cpf" placeholder="CPF" required>
         <input type="submit" name="enviar1" value="Consultar" id="btnEnviar">
      </form>
      </div>
    </div>
   </body>
</html>