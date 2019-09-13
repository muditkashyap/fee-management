<?php
/*Simple Login and Logout Using Session. 
  Creator: MUDIT
*/
?>
<?php
//*****************Start of the declaration of variables used for the connection*****************************//
$hostname='localhost';
$username='root';
$password='';
$db='fee_management';
//****************end of declaration************************************************************************//
//****************Start of connection proper**************************************************************//
$con=mysql_connect($hostname,$username,$password); //connection to the server
	if (!$con)
		{
			echo "Something went wrong!".mysql_error(); 
		}
		mysql_select_db($db,$con); //connection to the database
?>