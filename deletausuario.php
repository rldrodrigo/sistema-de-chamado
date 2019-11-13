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
        <form method="POST" name="deletarusuario" action="deletarusuario.php">
          <h1 class='tituloform'> Deletar Usuário </h1>
         <label> CPF: </label><input type="text" name="cpf" placeholder="CPF">
         <input type="submit" name="enviar1" value="Apagar" id="btnEnviar">
      </form>
      </div>
    </div>
   </body>
</html>
