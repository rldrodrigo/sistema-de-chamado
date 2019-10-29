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
     <div id='menuprincipal'>
       <nav>
          <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Funções</a>
                <ul>
                      <li><a href='usuarios.html'>Usuários</a></li>
                      <li><a href="chamados.html">Chamados</a></li>
                      <li><a href='funcionarios.html'>Funcionários</a></li>
                </ul>
            </li>
            <li><a href="#">Links</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </div>

    <div id="lateral">
        <div id="menu">

        <h3 class="link-titulo">Sistema de Chamado</h3>
          <ul class="box">
            <li><a href="#"> Usuário</a>
              <ul>
                <li><a href="cadastrarusuario.html">Cadastrar Usuário</a></li>
                <li><a href="consultarusuario.html">Consultar Usuário</a></li>
                <li ><a href="alterarusuario.html">Alterar Usuário</a></li>
                <li ><a href="deletarusuario.html">Deletar Usuário</a></li>
              </ul>
            </li>
            <li><a href="#"> Chamados</a>
              <ul>
                <li><a href="#">Cadastrar Chamado</a></li>
                <li><a href="#">Consultar Chamado</a></li>
                <li ><a href="#">Alterar Chamado</a></li>
                <li ><a href="#">Deletar Chamado</a></li>
              </ul>
            </li>
            <li><a href="#"> Funcionários</a>
              <ul>
                <li><a href="#">Cadastrar Funcionário</a></li>
                <li><a href="#">Consultar Funcionário</a></li>
                <li ><a href="#">Alterar Funcionário</a></li>
                <li ><a href="#">Deletar Funcionário</a></li>
              </ul>
            </li>

          </ul>
        </div> <!-- /#menu -->
      </div id="link"> <!-- vazio --> <div>
    </div> <!-- /#lateral -->

    <div id='centro'>
      <div id = 'formulario'>
        <?php


          //$cn = mysqli_connect('localhost','','') or die("ERRO NA CONEXÃO COM O MYSQL");
          $link = mysqli_connect("localhost", "root", "", "chamado");
          //mysql_select_db('salao',$link) or die("ERRO NA CONEXÃO COM O BANCO DE DADOS");
          mysqli_set_charset($link, "utf-8");

          $cpf = $_POST['cpf'];

          $sql = mysqli_query($link, "SELECT * from usuario") or die("Erro");
          while($dados=mysqli_fetch_assoc($sql)){

             if($cpf ==$dados['cpf']){

               echo "<form method='POST' name='alterarusuariobanco' action='alterarusuariobanco.php'  >";
               echo "<label> CPF: </label><input class='textField'  name='cpf' readonly = 'true' value='".$cpf."'/>";

               echo "<label> Nome: </label><input type='text' name='nome' placeholder='".$dados['nome']."'>";

               //echo "<label> Tipo: </label><input type='text' name='tipo' placeholder='".$dados['tipo']."'>";
                echo "<label> Tipo: </label><select class='select' name='tipo'>
                    <option value=''> Tipo </option>
                    <option value='Secretaria'> Administrador</option>
                    <option value='Gerente'>Usuário Comum</option>
               </select>";

              echo "<br><label> Senha: </label><input type='password' name='senha' placeholder='".$dados['senha']."' >";

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
