 <?php 
 // Include confi.php
 include_once('../confi.php');
 		$SaborSelect = $_GET['IDSabor']; 
		 $qur = mysql_query("select ID_Product, PrecentProduct from `producto` where SaborPdroduct = $SaborSelect");
		 $result =array();
		 if(!$result){
			 while($r = mysql_fetch_array($qur)){
			 extract($r);
			 $result[] = array("ID_Product" => $ID_Product, "PrecentProduct" => $PrecentProduct); 
			 }
			 $json = array("status" => 1, "presentacion" => $result);
			 $json = $result;
	 	}else{
	 		$json = array("status" => 0, "msg" => "No se pudieron obtener los datos");
	 	}
	
 @mysql_close($conn);
 
 /* Output header it was comented bb */
 header('Content-type: application/json');
 echo json_encode($json);

  ?>
