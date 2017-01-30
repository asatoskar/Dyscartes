<?php 
	include('config.php');
	$cname="Addition";
	$question="2+2=?";
	$op1='';
	$op2='';
	$op3='';
	$op4='';
	$ans='';
	$exp='';
	$sql = "select * from categories where cname='$cname'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
	$cid=$row['cid'];
	$sql = "INSERT INTO questions(cid, question, op1, op2, op3,op4,ans,exp) VALUES ($cid,'$question','$op1','$op2','$op3','$op4','$ans','$exp')";
    $conn->query($sql);
?>