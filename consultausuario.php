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
        <form method="POST" name="consultarusuario" action="consultarusuario.php" >
           <label> CPF: </label><input type="text" name="cpf" placeholder="CPF">
           <label> Tipo: </label><select class="select" name="tipo">
             <option value="">Selecione um tipo </option>
            <option value="Secretaria"> Administrador</option>
            <option value="Gerente">Usuário Comum</option>
           </select>

           <input type="submit" name="enviar1" value="Consultar" id="btnEnviar">
        </form>
      </div>
    </div>
   </body>
</html>
