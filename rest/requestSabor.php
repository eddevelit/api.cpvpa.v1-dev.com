 <?php 

 include_once('../confi.php');
$consulta = "select IDSabor, NOM_SABOR from `sabor`";
$resultQ = $conexion->query($consulta);
$result =array();
if(!$result){
	 while($r = mysqli_fetch_array($resultQ, MYSQLI_BOTH)){
	 extract($r);
	 $result[] = array("IDSabor" => $IDSabor, "NOM_SABOR" => $NOM_SABOR); 
	 }
	 $json = array("status" => 1, "sabor" => $result);
	 $json = $result;
	}else{
		$json = array("status" => 0, "msg" => "Select Fail");
	}	
 echo json_encode($json);
 mysqli_close($conexion);
  ?>

  