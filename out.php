<?php
session_start();
if (session_destroy()) //session_destroy is used to entirely delete a session
	{
		header('location: index');
	}
?>