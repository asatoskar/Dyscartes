<?php 
	include('config.php');
	$sid=1;
	$result='0';
	$sql_update = "Update solvedque set result = '1' where sqid=".$sid; 
    $conn->query($sql_update); 
?>