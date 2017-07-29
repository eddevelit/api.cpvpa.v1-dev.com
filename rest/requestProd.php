 <?php 
 // Include confi.php
 include_once('../confi.php');
 
 $pid = isset($_GET['pid']) ? mysql_real_escape_string($_GET['pid']) :  "";
 if(!empty($pid)){
 $qur = mysql_query("select ID_Product,PrecentProduct from `producto` where SaborPdroduct='$pid'");
 $result =array();
 while($r = mysql_fetch_array($qur)){
 extract($r);
 $result[] = array("ID_Product"=>$ID_Product,  "PrecentProduct" => $PrecentProduct); 
 }
 
 $json = $result;
 }else{
 $json = array("status" => 0, "msg" => " SaborPdroduct not define");
 }
 @mysql_close($conn);
 
 /* Output header */
 header('Content-type: application/json');
 echo json_encode($json);

  ?>