<?php
require('conexion.php');
sleep(2);
$usu=$_POST['user'];
$pass=$_POST['pass'];
$usuarios=$mysqli->query("SELECT * FROM `planet` WHERE `user`='".$usu."' AND `pass`='".$pass."'");
if ($usuarios->num_rows==1):
  $datos= $usuarios->fetch_assoc();
    echo json_encode(array('error'=>false,'Tipo_usuario'=>$datos['Tipo_usuario']));
else:
    echo json_encode(array('error'=>true));
endif;
$mysqli->close();
 ?>
