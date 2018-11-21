<?php require_once ('inc/connection1.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>log in user management system   </title>
<link rel="stylesheet" href="css/main.css">
</head> 

     <body >
	
 <style type="text/css">
    body{

background-image: url('img/img1.jpg');
background-repeat: no-repeat;
background-position:top center;
background-size: cover;
}
</style> 


	    <div class= "login">
        <form action="index.php" method="post">
		<fieldset>
		<lagend> <h1> Login In  </h1> </lagend>
		<p> <labal for=""> Username: </labal>
		<input type="text" name="email" id=""  placeholder="Email Address">
		</p>
		<p>
         <labal for = ""> Password </labal>
         <input type="password" name="password" id="" placeholder="password">
		 </p>
		 <p> 
		<button type="submit" name="submit" style="background-color:yellow"> Log In   </button>
        <button type="submit" name="submit" style="background-color:rgb(0, 255, 128)"> Register   </button>

		</p>
</fieldset>

        


</form>
		

</div> <!--login--> 

</body>
</html>
<?php mysqli_close($connection1); ?>







