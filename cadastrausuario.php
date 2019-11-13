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
        <form method="POST" name="cadastrarusuario" action="cadastrarusuario.php" >
              <h1 class='tituloform'> Cadastrar Usuário </h1>
			         <label> CPF: </label><input type="text" name="cpf" placeholder="CPF" required>

        		   <label> Nome: </label><input type="text" name="nome" placeholder="Nome" required>

               <label> Tipo: </label><select class="select" name="tipo" required>
                <option value="Usuário Comum"> Usuário Comum</option>
                <option value="Técnico"> Técnico</option>
                <option value="Adminstrador">Administrador</option>
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
