<?php 
	include('config.php');
	$sid=1;
	$qid=1;
	$result='0';
	$sql = "INSERT INTO solvedque(sid, qid, result) VALUES ($sid,'$qid','$result')";
    $conn->query($sql);
?>