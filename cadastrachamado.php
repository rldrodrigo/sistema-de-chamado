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
               <label> Prioridade: </label><select class="select" name="prioridade" required>
                <option value="1"> Alta</option>
                <option value="2">Média</option>
                <option value="3">Baixa</option>
               </select>
               <br>
               <label> Técnico: </label><select class="select" name="tecnico" required>
               <?php
                $link = mysqli_connect("localhost", "root", "", "chamado");
                mysqli_set_charset($link, "utf-8");
                $sql = mysqli_query($link, 'SELECT * from tecnico') or die("Erro");
                while($dados=mysqli_fetch_assoc($sql)){
                      echo "<option value='".$dados['nome']."'>".$dados['nome']."</option>";
                }
                ?>
              </select> </br>
              <label> Categoria: </label><select class="select" name="categoria" required>
              <?php
               $link = mysqli_connect("localhost", "root", "", "chamado");
               mysqli_set_charset($link, "utf-8");
               $sql = mysqli_query($link, 'SELECT * from servico') or die("Erro");
               while($dados=mysqli_fetch_assoc($sql)){
                     echo "<option value='".$dados['nome']."'>".$dados['nome']."</option>";
               }
               ?>
             </select> </br>

              <div id="botaoEnviar">
        			<input type="submit" name="enviar" value="Cadastrar" id="btnEnviar">
              </div>
        </form>
      </div>
    </div>
   </body>
</html>
