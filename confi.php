<?php
/*
	$conn = mysql_connect("localhost", "root", "");
	mysql_select_db('aguapurific1', $conn);
*/
	$conexion = new mysqli("localhost", "root", "", "aguapurific1");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


//echo $mysqli->host_info . "\n";
?>