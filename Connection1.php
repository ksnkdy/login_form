<?php 

//$connection  = mysql_connect(dbserver, dbuser , dbpass, dbname, );

$connection1 = mysqli_connect('localhost', 'root','', 'userdb' );


//checking connection error
if (mysqli_connect_errno()) {
	die('Database connection failed' . mysqli_connect_error());  

} else {
   

}




?>