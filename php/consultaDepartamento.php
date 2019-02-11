<?php
include 'ConexionPDO.php';
$conexion=new conexion();
$cnn= $conexion->getConexion();
$sql="SELECT DISTINCT `Departamento` FROM `anuncios`";
$statement=$cnn->prepare($sql);
$valor=$statement->execute();
if($valor){
  while ( $result = $statement->fetch(PDO::FETCH_ASSOC)){
      $depa["depa"][]= $result;
}
  echo json_encode($depa);
}else{
  echo "error";}
$statement->closeCursor();
$conexion=null;
?>
