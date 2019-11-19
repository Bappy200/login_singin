<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <div class="content">
        <div class="header">
            <div class="logo">
                <h2>Login and Singin Page</h2>
            </div>
            <div class="right">
                <span><a href="login_htm.php">Login</a></span>
                <span><a href="#">Singin</a></span>
            </div>
        </div>
		</div>
        <div class="content_2">
            <div class="content_left">
                <img src="caturn_1.png" alt="">
            </div>
            <div class="singin_form">
                <form  class ="input_usr" action="singin.php" method="POST">
				    <?php if(isset($_REQUEST["insert"])){
						echo "<h3 style='color:#fff;font-size:2rem;'>Singin Conpleate</h3>";
					}?>
					
                    <input type="text" name="fname" placeholder="Frist name">
                    <input type="text" name="lname" placeholder="Last name">
                    <input type="gmail" name="email_addr" placeholder="Email address">
                    <input type="text" name="pwd" placeholder="Password">
                    <input type="submit" value="SINGIN">
                </form>
            </div>
        </div>
        
         <div class="fotter">
            <p>Sajjadul 2011-200000 &copy;</p>
          
        </div> 
               
    
</body>
</html>