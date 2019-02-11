<?php
include 'conexionPDO.php';
$conexion=new conexion();
$cnn= $conexion->getConexion();
$sql="SELECT * FROM `pais`";
$statement=$cnn->prepare($sql);
$valor=$statement->execute();
if($valor){
  while ( $result = $statement->fetch(PDO::FETCH_ASSOC)){
      $pais["pais"][]= $result;
}
  echo json_encode($pais);
}else{
  echo "error";}
$statement->closeCursor();
$conexion=null;
?>
