<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/signup.css">

</head>


<body>
    <header>
        <div class="headers">
            <div class="top">
                <p>Connect with Us</p>
                <div class="socialmedia">
                    <a href="#" id="facebook" class="fa fa-facebook"></a>
                    <a href="#" id="instagram" class="fa fa-instagram"></a>
                    <a href="#" id="twitter" class="fa fa-twitter"></a> &nbsp; &nbsp;|
                    <p><a href="">Call Us +977981653</a> </p>
                </div>


            </div>

            <div class="navigation">
                <a href="index.php" style="color: #e03131;">SELL ON TECHSHOP</a>&nbsp; |
                <a href="help.php">HELP CENTER</a>&nbsp; |</a>
                <a href="">TRACK ORDER</a>

            </div>
            <hr>

            <div class="logo">
                <img src="images/logo1.png" height="70px" width="200px">
            </div>
            <div class="searchitem">
                <input type="text" class="searchterm" autocomplete="off" name="" placeholder="      Search entire store here.........">
                <button type="submit" class="searchbtn">
                      <i class="fa fa-search"></i>
                   </button>
            </div>

            <div class="signin" id="accountpage">
                <a style="text-decoration:none"><img src="images/user-circle.png" height="23px" width="20px"></img>
                    <button class="open-button" onclick="myFunction()">
                     <p font-size:8px> Namaste,Sign in
                        <b font-size:10px>My Account</b></p></button></a>
                </a>

                <div class="form-popup" id="myform" style="display: none;">
                    <form class="form-container">
                        <button type="submit" class="btn"><a style="text-decoration:none" href="signup.php">Sign in</a> </button>

                        <label class="new">New Customer?</label>


                        <button type="submit" class="btn-start"> <a style="text-decoration:none" href="register.php">Start here</button></a>
                    </form>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myform");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none"
                            }
                        }
                    </script>


                </div>
            </div>



            <div class="cart">
                <a style="text-decoration:none" href=" "> <img src="images/cart.png" height="20px" width="30px">
                    <button style="color:rgb(41, 37, 37);font-size: 13px" ;><b> My Cart</button>

            </div>

            <div class="navbar">
                <a style="text-decoration:none" href=" "><b> TOP OFFER</b></a>
                <a style="text-decoration:none" href=" "><b> MOBILES</b></a>
                <a style="text-decoration:none" href=" "><b>ELECTRONICS</b></a>
                <a style="text-decoration:none" href=" "><b>HEADPHONES & SPEAKER</b></a>
                <a style="text-decoration:none" href=" "><b> TV & Applications</b> </a>
            </div>


    <?php
    <!-- //check buton click -->
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

    ?>




            <!-- for login form -->

            <div class="formbox">
                <div class="loginform">
                    <p>Sign_In </p>
                </div>

                <form  method="post" action="" id="loginpage" class="loginfillup">
                
           <?php  if(isset($msg)){ ?>
           <p class="error_message"><?php echo $msg ?></p>
             
             <?php }?>

             <?php if(isset($_GET['err']) && $_GET['err'] == 1){ ?>
                <p class="error_message"> Please login to continue </p>
            <?php } ?>

                    <p>E-mail or mobile phone number</p>
                    <input type="text" name="email" class="logemail" id="logemail" placeholder="Enter your E-mail">
                    <?php if(isset($err['email'])) { ?>
                  <span class="error"> <?php echo $err['email'] ?> </span>
                  <?php  } ?><br> <br>



                    <input type="logpassword" name="password" class="logpassword" id="logpassword" placeholder="Password">
                    <?php if (isset($err['password'])) { ?>
                  <span class="error"> <?php echo $err['password'] ?> </span>
                  <?php  } ?><br><br>

                    <div class="Remember">
                        <input type="checkbox" class="box" onclick="myfunction()">
                        <span style="font-family:'Courier New';" name="remember"> Remember Me</span><br><br>
                    </div>

                    <div class="login">
                        <button b2="login" name="btnlogin"  class="log">LOGIN</button><br><br>
                        <button b3="login" class="createaccount"><a style="text-decoration:none"  href="register.html">Create an account</a></button>
                    </div>

                </form>

            </div>



</body>

</htm