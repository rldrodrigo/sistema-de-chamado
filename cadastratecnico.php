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
        <form method="POST" name="cadastrartecnico" action="cadastrartecnico.php" >
              <h1 class='tituloform'> Cadastrar Técnico </h1>
			         <label> CPF: </label><input type="text" name="cpf" placeholder="CPF" required>

        		   <label> Nome: </label><input type="text" name="nome" placeholder="Nome" required>

               <label> Serviço: </label><select class="select" name="servico" required>
                 <?php
                  $link = mysqli_connect("localhost", "root", "", "chamado");
                  mysqli_set_charset($link, "utf-8");
                  $sql = mysqli_query($link, 'SELECT * from servico') or die("Erro");
                  while($dados=mysqli_fetch_assoc($sql)){
                        echo "<option value='".$dados['nome']."'>".$dados['nome']."</option>";
                  }
                  ?>
               </select>
               <br>
              <div id="botaoEnviar">
        			<input type="submit" name="enviar" value="Cadastrar" id="btnEnviar">
              </div>
        </form>
      </div>
    </div>
   </body>
</html>
