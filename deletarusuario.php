
      <?php


          //$cn = mysqli_connect('localhost','','') or die("ERRO NA CONEXÃO COM O MYSQL");
          $link = mysqli_connect("localhost", "root", "", "chamado");
          //mysql_select_db('salao',$link) or die("ERRO NA CONEXÃO COM O BANCO DE DADOS");
          mysqli_set_charset($link, "utf-8");

          $cpf = $_POST['cpf'];
          $deleta = "DELETE FROM usuario WHERE cpf = '$cpf'";


        mysqli_query($link,$deleta) or die ("Erro");

        header('Location: deletarusuario.html');
?>
