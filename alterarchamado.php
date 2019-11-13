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
        <?php
          $link = mysqli_connect("localhost", "root", "", "chamado");
          mysqli_set_charset($link, "utf-8");

          $id = $_POST['id'];

          $sql = mysqli_query($link, "SELECT * from chamado") or die("Erro");
          while($dados=mysqli_fetch_assoc($sql)){

             if($id ==$dados['id']){

               echo "<form method='POST' name='alterarusuariobanco' action='alterarchamadobanco.php'  >";
               echo "<label> ID: </label><input class='textField'  name='id' readonly = 'true' value='".$dados['id']."'/>";

               echo "<label> Título: </label><input type='text' name='titulo' placeholder='".$dados['titulo']."'>";

                echo "<label> Prioridade: </label><select class='select' name='prioridade'>
                    <option value=''> Prioridade </option>
                    <option value='1'> Alta</option>
                    <option value='2'> Média</option>
                    <option value='3'> Baixa </option>
               </select>";

               echo "<label> Técnico: </label><select class='select' name='tecnico' >";
               echo "<option value=''> Técnico</option>";
                $link = mysqli_connect("localhost", "root", "", "chamado");
                mysqli_set_charset($link, "utf-8");
                $sql = mysqli_query($link, 'SELECT * from tecnico') or die("Erro");
                while($dados=mysqli_fetch_assoc($sql)){
                      echo "<option value='".$dados['nome']."'>".$dados['nome']."</option>";
                }
                echo "</select> </br>";

               echo "<label> Categoria: </label><select class='select' name='categoria'>";
               echo "<optiom value=''> Categoria </option>";
                $link = mysqli_connect("localhost", "root", "", "chamado");
                mysqli_set_charset($link, "utf-8");
                $sql = mysqli_query($link, 'SELECT * from servico') or die("Erro");
                while($dados=mysqli_fetch_assoc($sql)){
                      echo "<option value='".$dados['nome']."'>".$dados['nome']."</option>";
                }
              echo "</select> </br>";

              echo "<label> Status: </label><select class='select' name='status' >";
              echo "<option value='Pendente'> Pendente</option>";
              echo "<option value='Resolvido'> Resolvido</option>";
              echo "</select> </br>";


              echo "<div id='botaoEnviar'>";
              echo "<input type='submit' name='enviar' value='Alterar' id='btnEnviar'>";
              echo "</div>  </form>";
              return;
            }
          }

?>
      </div>
    </div>
   </body>
</html>
