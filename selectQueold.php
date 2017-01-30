<html>
<head><script>
<?php
include('config.php');
$qid=1;
$sql = "select * from questions where qid='$qid'";
        $result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			{
				$question=$row['question'];
				$optiona=$row['op1'];
				$optionb=$row['op2'];
				$optionc=$row['op3'];
				$optiond=$row['op4'];
				$answer=$row['ans'];
			}
			echo "var quest = \"'$question'\"";
		}
			
?>

var allnos = quest.match(/[0-9]+/g);
var stringtest="";
for(i=0;i<allnos.length;i++)
	stringtest=stringtest+" "+allnos[i];
window.onload=function(){
document.getElementById("resultdiv").innerHTML=stringtest;
}
</script>
</head>


<body>
<div id="resultdiv"></div>
</body>
</html>