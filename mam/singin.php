<?php
   require_once("conntect.php"); 
   
   if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["email_addr"]) && isset($_REQUEST["pwd"])){
	   //variable declear
	   $fname=$_REQUEST["fname"];
	   $lname=$_REQUEST["lname"];
	   $email_addr=$_REQUEST["email_addr"];
	   $pwd=$_REQUEST["pwd"];
	  
	   
	   $Insert="INSERT INTO `sing_in` (`fname`, `lname`, `email_addr`, `email_pws`) VALUES ('$fname', '$lname', '$email_addr', '$pwd')";
	   $run=mysqli_query($connect,$Insert);
	   if($run){
		   header("location:index.php?insert=true");
	   }
        else{
			echo "not comm";
		}	   
	   
   }
   
  
   
   
?>