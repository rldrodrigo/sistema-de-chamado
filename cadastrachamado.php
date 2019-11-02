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
        <form method="POST" name="cadastrarusuario" action="cadastrarchamado.php">
			         <label> Título: </label><input type="text" name="titulo" placeholder="Título" required>

               <label> Prioridade: </label><select class="select" name="tipo" required>

                <option value="1"> Alta</option>

                <option value="2">Média</option>

                <option value="3">Baixa</option>

               </select>
               <br>

               <label> Técnico: </label><select class="select" name="tecnico" required>

                <option value="1"> Alta</option>

                <option value="2">Média</option>

                <option value="3">Baixa</option>

               </select>
               <br>



							 <label> Senha: </label><input type="password" name="senha" placeholder="Senha" required>

              <div id="botaoEnviar">
        			<input type="submit" name="enviar" value="Cadastrar" id="btnEnviar">
              </div>
        </form>
      </div>
    </div>
   </body>
</html>
