<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="login.css">
</head>
<body>
       <div class="content">
        <div class="header">
            <div class="logo">
                <h2>Login and Singin Page</h2>
            </div>
            <div class="right">
                <span><a href="#">Login</a></span>
                <span><a href="index.php">Singin</a></span>
            </div>
        </div>
		</div>
        <div class="content_2">
            <div class="content_left">
                <img src="caturn_1.png" alt="">
            </div>
            <div class="singin_form">
			
                <form  class ="input_usr"action="login_core.php" method="POST">                   
                    
					<h2>LOGIN</h2>
					<p><?php if(isset($_REQUEST["login"])){
						$login=$_REQUEST["login"];
						if($login=="true"){
							echo "Login Succage Full";
						}
						else{
							echo "Login Wrong";
						}
					}?></p>
					<input type="gmail" name="email_addr" placeholder="Email address">
                    <input type="text" name="pwd" placeholder="Password">
                    <input type="submit" value="LOGIN">
					
                </form>
            </div>
        </div>
        
         <div class="fotter">
            <p>Sajjadul 2011-200000 &copy;</p>
          
        </div> 
               
    
</body>
</html>