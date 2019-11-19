<?php
    require_once("conntect.php");
	if(isset($_REQUEST["email_addr"]) && isset($_REQUEST["pwd"])){
		$email_addr=$_REQUEST["email_addr"];
        $email_pwd=$_REQUEST["pwd"];
		
		$select="SELECT * FROM `sing_in` WHERE email_addr='$email_addr' AND email_pws='$email_pwd'";
		$runSelect=mysqli_query($connect,$select);
		if(mysqli_fetch_array($runSelect)){
			header("location:login_htm.php?login=true");

		}
		else{
			header("location:login_htm.php?login=flase");
			
		}
		
		
	}


?>