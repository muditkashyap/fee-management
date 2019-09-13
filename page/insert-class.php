<?php  
$connect = mysqli_connect("localhost", "root", "", "fee_management");
$sql = "INSERT INTO class(name, info) VALUES('".$_POST["name"]."', '".$_POST["info"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'New Class Added Successfully';  
}  
 ?>