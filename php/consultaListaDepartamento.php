<?php
include 'conexionPDO.php';
$conexion=new conexion();
$cnn= $conexion->getConexion();
$pais=$_GET['lista_pais'];
$sql="SELECT * FROM `departamento` WHERE id_pais='".$pais."'";
$statement=$cnn->prepare($sql);
$valor=$statement->execute();
if($valor){
  while ( $result = $statement->fetch(PDO::FETCH_ASSOC)){
      $depart["depart"][]= $result;
}
  echo json_encode($depart);
}else{
  echo "error";}
$statement->closeCursor();
$conexion=null;
?>
