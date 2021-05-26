<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminlogin Page</title>
</head>
<style>
    .form-group{
        padding:20px;
        background-color:gray;


    }
    .login_form fieldset{
        width:50%;
        position:fixed;
    }
    .login_form.form-group label{
        width:200px;
        display:inline-block;
    }

    .login_form.form-group input{
        width:50%;
        display:inline-block;
        border-color: 1px solid white;
        height:20px;
        
    }
    .login{
        width:60px;
        height:25px;
        background-color:green;
        display:inline-block;
        margin-left:50px;
        color:#fff;
        margin-bottom:5px;
    }
    .reset{
        width:60px;
        height:25px;
        background-color:red;
        display:inline-block;
        margin-left:10px;
        color:#fff;
    }
    .error{
        color:red;
    }
    .error_message{
        color:#f00;
        padding:5px;
    }
    </style>
   
    <?php
    if(isset($_COOKIE['admin_email'])){
        session_start();
        $_SESSION['admin_email'] = $_COOKIE['admin_email'];
        header('location:adminlogin.php');
    }
    //check buton click
    if(isset($_POST['btnLogin'])){
     $err=[];
     if(isset($_POST['email']) && !empty($_POST['email']) && trim($_POST['email'])){
         $email = $_POST['email'];
         if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
              $err['email'] = 'Please enter valid email';
         }
     }
     else{
         $err['email'] = 'Enter email';
     }


     if(isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])){
        $password = $_POST['password'];
        $enctypted_password = md5($password);
    }
    else{
        $err['password'] = 'Enter  password';
    }

    if (count($err) == 0){
       require_once 'connect.php';
       $sql = "SELECT* FROM  admins_loginpage WHERE 
       email='$email' AND password='$enctypted_password' 
       AND status=1";

       //execute query
       $result = $connection->query($sql);
        if($result->num_rows == 1){
          $row = $result->fetch_assoc();
          session_start();
          $_SESSION['admin_email'] = $row['email'];

          //check remember me
          if(isset($_POST['remember'])){
              //store data into cookie also
              setcookie('admin_email',$row['email'],time()+7*24*60*60);
          }

            //redirect to adminlogin page
              header('location:adminaddpdts.php');
        }
        else{
            $msg='Credential not match';
        }
    }
}
    ?>





<body>
    <h3><b>Welcome admins </h3>
    <form action=" " method="post" class="login_form" id = "login_form" >
        <fieldset >
      <?php  if(isset($msg)){ ?>
           <p class="error_message"><?php echo $msg ?></p>
             
             <?php }?>

             <?php if(isset($_GET['err']) && $_GET['err'] ==1){ ?>
                <p class="error_message"> Please login to continue </p>
            <?php } ?>

            <h2>Login Form </h2>
            <div class="form-group">
                <label for ="email">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="email" id="email" placeholder="Enter email" value="<?php echo isset($email)?$email:''?>">
                <?php if(isset($err['email'])) { ?>
                  <span class="error"> <?php echo $err['email'] ?> </span>
                  <?php  } ?>
            </div>

             <div class="form-group">
                <label for ="password">Password</label>
                <input type="text" name="password" id="password" placeholder="password" >
                <?php if (isset($err['password'])) { ?>
                  <span class="error"> <?php echo $err['password'] ?> </span>
                  <?php  } ?>
            </div>


            <div class="form-group">
                <input type="checkbox" class="remember" name="remember"  value = "remember">
                <label for="remember">Remember me </label><br>
                </div>

                <div class="form-group">
                <input type="submit" class="login" name="btnLogin" id="login" value="login">
                <input type="reset" class="reset" name="btnReset" id="reset" value="clear">
                
                </div>


                

        </fieldset>
        
</body>
</html>