<?php
    $link = mysqli_connect("localhost", "root", "", "chamado");

    mysqli_set_charset($link, "utf-8");


    $titulo=$_POST['titulo'];
    $prioridade=$_POST['prioridade'];
    $tecnico=$_POST['tecnico'];
    $categoria=$_POST['categoria'];
    $status = 'Pendente';

    date_default_timezone_set('America/Sao_Paulo');
    $socket = fsockopen('udp://pool.ntp.br', 123, $err_no, $err_str, 1);
    if ($socket)
    {
      if (fwrite($socket, chr(bindec('00'.sprintf('%03d', decbin(3)).'011')).str_repeat(chr(0x0), 39).pack('N', time()).pack("N", 0)))
      {
          stream_set_timeout($socket, 1);
          $unpack0 = unpack("N12", fread($socket, 48));
          $hora = date('Y-m-d H:i:s', $unpack0[7]);
      }

      fclose($socket);
    }

		$query = "INSERT INTO chamado (titulo, prioridade, tecnico, categoria, status, hora) VALUES ('$titulo','$prioridade','$tecnico', '$categoria','$status','$hora')";

		mysqli_query($link, $query);

    header('Location: consultachamado.php');
?>
