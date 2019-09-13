<?php
/* how to set a cookie?
syntax --> setcookie(name, value, expiration)
where setcookie is a function to create a cookie. 
In this example cookie will expire after 2 months :)
*/
$jm = 60 * 60 * 24 * 60 + time(); 
setcookie('jl', date("G:i - m/d/y"), $jm); 
?>