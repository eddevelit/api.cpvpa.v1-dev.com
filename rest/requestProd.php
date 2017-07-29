 <?php 
 // Include confi.php
 include_once('../confi.php');
 
 $pid = isset($_GET['pid']) ? mysql_real_escape_string($_GET['pid']) :  "";

 if(!empty($pid)){
	 $query = "select ID_Product,PrecentProduct from `producto` where SaborPdroduct='$pid'";
	 $resultQ = $conexion->query($query);
	 $result =array();
	 while($r = mysqli_fetch_array($resultQ, MYSQLI_BOTH)){
		 extract($r);
		 $result[] = array("ID_Product"=>$ID_Product,  "PrecentProduct" => $PrecentProduct); 
	 }
	 $json = $result;
 }else{
 	$json = array("status" => 0, "msg" => " SaborPdroduct not define");
 }
 
 echo json_encode($json);
 mysqli_close($conexion);
  ?>