<?php
  $local="localhost";
    $usrname="webpage";
	$dbname="webdevelopment";
	$dbpassword="webpage123";
	
	$connect=mysqli_connect($local,$usrname,$dbpassword,$dbname);
	if(!$connect){
		echo "Not Connect data base";
	}	

?>