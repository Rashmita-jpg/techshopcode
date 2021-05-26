<!DOCTYPE html>
<html>
<head>
  <title> retrieve image from database in PHP</title>
</head>
<body>

<style>

    .heading{
        margin-left:5%;
    }
.table_insert{
    width:100%;
    height:0 auto;
    background-color:white;
    margin-left:40px;
    display: flex;
    text-align:left;

}





</style>

<?php

include "connect.php"; // Using database connection file here

require_once'./header.php';
?>



  <div class="heading">     

<h2>All LAPTOPS </h2><hr>
</div>

<div class="table_insert">
 
<?php

$records = mysqli_query($db,"select * from upload"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?> 
  
  <tr>
    <td><img src="<?php echo $data['image']; ?>" width="170" height="168"></td>
    <td><?php echo $data['filetitle']; ?><br></td>
    <td><?php echo $data['filedesc']; ?><br></td>
    <td><?php echo $data['Cost']; ?><br></td>
    
  </tr>	

<?php
}
?>
</div>



<?php mysqli_close($db);  // close connection ?>



<div class = footer-last>
              <p> Copyright &#169; 2021 All Rights Reserved </p>
                </div>

</body>
</html>



