<?php

 //process to login with database
 $connection = new mysqli('localhost','root','','db_ecommerce');
 if ($connection->connect_error !=0){
     die('Database connection error:'.$connection->connect_error);
 }



?>


<!-- //for image upload -->
<?php

$db = mysqli_connect("localhost","root","","db_ecommerce");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>