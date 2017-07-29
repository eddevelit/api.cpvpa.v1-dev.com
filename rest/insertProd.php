<?php 

include_once('../confi.php');
/* cambiar el conjunto de caracteres a utf8 */
if (!$conexion->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    exit();
} else {
    printf("Conjunto de caracteres actual: %s\n", $conexion->character_set_name());
}
 
if($_SERVER['REQUEST_METHOD'] == "POST"){

	 $id_producct        = mysqli_real_escape_string ($conexion, $_POST['id_producct']);

	 $fechaProduccion    = mysqli_real_escape_string ($conexion, $_POST['fechaProduccion']);

	 $horaProduccion     = mysqli_real_escape_string ($conexion, $_POST['horaProduccion']);

	 $minutProduccion    = mysqli_real_escape_string ($conexion, $_POST['minutProduccion']);

	 $segProduccion      = mysqli_real_escape_string ($conexion, $_POST['segProduccion']);

	 $cantidadProduccion = mysqli_real_escape_string ($conexion, $_POST['cantidadProduccion']);


$sql = "INSERT INTO aguapurific1.produccion
		  (ID_producc, FechaProduccion,HoraProduccion,MinutProduccion,SegProduccion,CantidadProduccion)
		  VALUES ('$id_producct', '$fechaProduccion', '$horaProduccion', '$minutProduccion', '$segProduccion', ' $cantidadProduccion')";

$qur = mysqli_query($conexion,$sql);

if($qur){
	$json = array("status" => 1, "msg" => "Done data added!");
}else{
	$json = array("status" => 0, "msg" => "Error adding data!");
}
}
else{
	$json = array("status" => 0, "msg" => "Request method not accepted");
}
 
mysqli_close($conexion);
 
 echo json_encode($json);
 ?>