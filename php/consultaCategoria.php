<?php
include 'conexionPDO.php';
$conexion=new conexion();
$cnn= $conexion->getConexion();
$sql="SELECT * FROM `categoria`";
$statement=$cnn->prepare($sql);
$valor=$statement->execute();
if($valor){
  while ( $result = $statement->fetch(PDO::FETCH_ASSOC)){
      $cate["cate"][]= $result;
}
  echo json_encode($cate);
}else{
  echo "error";}
$statement->closeCursor();
$conexion=null;
?>
