
      <?php

          $link = mysqli_connect("localhost", "root", "", "chamado");
          mysqli_set_charset($link, "utf-8");

          $id = $_POST['id'];
          $deleta = "DELETE FROM tecnico WHERE id = '$id'";
          mysqli_query($link,$deleta) or die ("Erro");

        header('Location: deletatecnico.php');
?>
