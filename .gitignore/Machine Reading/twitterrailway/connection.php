<?php  
$servername = "localhost" ;  
$username = "root"; 
$pass = "";  
$con = ($GLOBALS["___mysqli_ston"] = mysqli_connect($servername, $username, $pass)) or die("Problem occur in connection");  
$db = ((bool)mysqli_query($con, "USE " ."railway_data")); 
?>