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
        <form method="POST" name="consultarusuario" action="consultarusuario.php" >
           <h1 class='tituloform'> Consulta Usuário </h1>
           <label> CPF: </label><input type="text" name="cpf" placeholder="CPF">
           <label> Tipo: </label><select class="select" name="tipo">
             <option value="">Selecione um tipo </option>
             <option value="Técnico"> Técnico </option>
            <option value="Administrador"> Administrador</option>
            <option value="Usuário Comum">Usuário Comum</option>
           </select>

           <input type="submit" name="enviar1" value="Consultar" id="btnEnviar">
        </form>
      </div>
    </div>
   </body>
</html>
