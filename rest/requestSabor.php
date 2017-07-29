 <?php 
 // Include confi.php
 include_once('../confi.php');

		 $qur = mysql_query("select IDSabor, NOM_SABOR from `sabor`");
		 $result =array();
		 if(!$result){
			 while($r = mysql_fetch_array($qur)){
			 extract($r);
			 $result[] = array("IDSabor" => $IDSabor, "NOM_SABOR" => $NOM_SABOR); 
			 }
			 $json = array("status" => 1, "sabor" => $result);
			 $json = $result;
	 	}else{
	 		$json = array("status" => 0, "msg" => "Select Fail");
	 	}
	
 @mysql_close($conn);
 
 /* Output header it was comented bb */
 header('Content-type: application/json');
 echo json_encode($json);

  ?>

  