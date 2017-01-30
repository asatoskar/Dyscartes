<?php 
	include('config.php');
	$sid=1;
	$result='0';
	$sql_update = "Update students set correct = correct+1 where sid=".$sid; 
    $conn->query($sql_update); 
?>