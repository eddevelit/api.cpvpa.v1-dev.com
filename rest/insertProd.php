<?php 
// Include confi.php
include_once('../confi.php');
 
if($_SERVER['REQUEST_METHOD'] == "POST"){
 // Get data
	 //$cantidad     = isset($_POST['cantidad'])     ? ($_POST['cantidad']) : "";
	/* $presentacion = isset($_POST['presentacion']) ? mysql_real_escape_string($_POST['presentacion']) : "";
	 $sabor        = isset($_POST['sabor'])        ? mysql_real_escape_string($_POST['sabor']) : "";
	 $fechaProd    = isset($_POST['fechaProd'])    ? mysql_real_escape_string($_POST['fechaProd']) : "";*/
	 $id_producct=isset($_POST['id_producct'])         ?mysql_real_escape_string ($_POST['id_producct']) : "";

	 $fechaProduccion=isset($_POST['fechaProduccion'])     ?mysql_real_escape_string ($_POST['fechaProduccion']) : "";

	 $horaProduccion=isset($_POST['horaProduccion'])       ?mysql_real_escape_string ($_POST['horaProduccion']) : "";

	 $minutProduccion=isset($_POST['minutProduccion'])     ?mysql_real_escape_string ($_POST['minutProduccion']) : "";

	 $segProduccion=isset($_POST['segProduccion'])         ?mysql_real_escape_string ($_POST['segProduccion']) : "";

	 $cantidadProduccion=isset($_POST['cantidadProduccion'])     ?mysql_real_escape_string ($_POST['cantidadProduccion']) : "";

 

$sql = "INSERT INTO `aguapurific1`.`produccion`
		  (`ID_Produccion`, `ID_producct`, `FechaProduccion`,`HoraProduccion`,`MinutProduccion`,`SegProduccion`,`CantidadProduccion`)
		  VALUES (null,'$id_producct', '$fechaProduccion', '$horaProduccion', '$minutProduccion', '$segProduccion', ' $cantidadProduccion');";

		 $qur = mysql_query($sql);
		 if($qur){
		 $json = array("status" => 1, "msg" => "Done data added!");
	 }else{
	 	$json = array("status" => 0, "msg" => "Error adding data!");
	 }
	}else{
		 $json = array("status" => 0, "msg" => "Request method not accepted");
	}
 
@mysql_close($conn);
 
/* Output header */
 header('Content-type: application/json');
 echo json_encode($json);
 ?>