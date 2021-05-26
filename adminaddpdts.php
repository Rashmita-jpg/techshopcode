<!DOCTYPE html>
<html>
<head>
  <title>Store and retrieve image from database in PHP</title>
</head>
<body>

<?php
    session_start();
    if(!isset($_SESSION['admin_email'])){
        header('location:adminlogin.php?err=1');
    }
    ?>

<?php

include "connect.php"; // Using database connection file here
if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable


    if ($_FILES['image']['size'] <= 104858) {
    $file_types = ['image/png', 'image/jpeg', 'image/gif', 'image/jpg'];
    }else {
        $err['image'] = 'Select Valid format';
     }
    $dst = "./images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($db,"insert into upload(filetitle,filedesc,Cost,image) values('$_POST[filetitle]','$_POST[filedesc]','$_POST[Cost]','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
}
?>






  <h2>Insert Data</h2>

    <form action="#" method="post" enctype="multipart/form-data">
    <table border="4">
      <tr>
        <td>Filename </td>
        <td><input type="text" name="filename" placeholder="Enter file name" Required></td>
      </tr>

      <tr>
      <td> File Title</td>
      <td><input type="text" name="filetitle" placeholder="Enter filetitle" Required></td>
    </tr>

    <tr>
    <td>Enter description</td>
    <td><input type="text" name="filedesc" placeholder="Enter filedescription" Required></td>
  </tr>

  <tr>
    <td>Enter cost</td>
    <td><input type="float" name="Cost" placeholder="Enter cost" Required></td>
  </tr>

      <tr>
        <td>Select Image</td>
        <td><input type="file" name="image" Required></td>
      </tr>

      <tr>
        <td colspan="2"><input type="submit" name="submit" value="Upload"></td>	
        <td colspan="2"><span ><a href="logout.php"class="text-l" > Logout</a></span>		
      </tr>
    </table>
  </form>

