<?php  
	$connect = mysqli_connect("localhost", "root", "", "fee_management");  
	$class_id = $_POST["class_id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE class SET ".$column_name."='".$text."' WHERE class_id='".$class_id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Class Updated';  
	}  
 ?>