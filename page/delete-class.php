<?php  
	$connect = mysqli_connect("localhost", "root", "", "fee_management");
	$sql = "DELETE FROM class WHERE class_id = '".$_POST["class_id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Class Delete Successfully';  
	}  
 ?>