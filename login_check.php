<?php
	session_start();
	include('database/db_con.php');
	
	function wash($var) //function used for checking data
		{
			if (get_magic_quotes_gpc())
				{
					$var=stripslashes($var);
				}
			return mysql_real_escape_string ($var);
		}
		
		$user=wash($_POST['username']);
		$pass=wash($_POST['password']);
		$sql="Select * from staff where username='$user' and password='$pass'"; //sql statement

		$result=mysql_query($sql); //query
		  $sample=mysql_fetch_assoc($result);


		    $status = $sample["status"];

		if ($result) //fetching  results
			{
				if (mysql_num_rows($result) > 0)
					{
							// Validate Active User 
						
							if($status == "active")
						{
							session_regenerate_id();
							
							$_SESSION['ID']=$sample['userid'];
							$_SESSION['NAME']=$sample['owner'];
							
							session_write_close();
							?>

							<div class='alert alert-success' style='border-radius:25px;'>Login Successfull!</div>
							<script type="text/javascript">
								setTimeout(function(){
								window.location.href="home";
							},3000);
							</script>
						<?php
						}
						else{

							?>
							<div class='alert alert-danger' style='border-radius:25px;'>Your Account is Not Approved</div>	
						<?php


						}
					}
				else
					{

						?>

						<div class='alert alert-danger' style='border-radius:25px;'>Username or Password Wrong</div>
						
						<?php
						exit();
					}
				}
		else
			{
				echo 'Error/s Detected: '.mysql_error(); //used for error purposes
			}
?>