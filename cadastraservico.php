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
       <form method="POST" name="cadastrarservico" action="cadastrarservico.php" >
              <label> Nome: </label><input type="text" name="nome" placeholder="Nome" required>

              <label> Descricao: </label><textarea name="descricao" rows="10" cols="30" required > </textarea>  

             <div id="botaoEnviar">
             <input type="submit" name="enviar" value="Cadastrar" id="btnEnviar">
             </div>
       </form>
     </div>

   </body>
</html>
