<?php
include 'ConexionPDO.php';
$conexion=new conexion();
$cnn= $conexion->getConexion();
$sql="SELECT id,pais,departamento,titulo FROM anuncios ";
$statement=$cnn->prepare($sql);
$valor=$statement->execute();
if($valor){
  while ( $result = $statement->fetch(PDO::FETCH_ASSOC)){
      $data["data"][]= $result;
}
  echo json_encode($data);
}else{
  echo "error";}
$statement->closeCursor();
$conexion=null;
?>
