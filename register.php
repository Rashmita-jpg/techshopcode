<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./style/register.css">

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
                <a href="help.php">HELP CENTER</a>&nbsp; |
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


                        <button type="submit" class="btn-start"> <a style="text-decoration:none" href="signup.php">Start here</button></a>
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





            <!-- ------------------------ for register form ----------------------- -->

            <div class="tops">
                <div class="form-box" id="close">
                    <p> Create account</p>
                    <form id="register" class="fillup">
                        <input type="text" class="username" placeholder="Username" minlength="4" required>
                        <hr><br>
                        <input type="email" class="remail" placeholder="Email Address" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$" required />
                        <hr><br>
                        <input type="number" class="number" placeholder="Mobile Number" length="10" required>
                        <hr><br>
                        <input type="password" class="password" placeholder="Password" id="myInput" minlength="8" required>
                        <hr><br>
                        <input type="password" class="confpassword" placeholder="Confirm password" id="myInput" minlength="8" required>
                        <hr><br>

                        <button b5="register" class="reg2">Register</button>
                        <button type="button" onclick="document.getElementById('close').style.display='index.php' class="cancelbtn">Cancel</button><br>


                    </form>
                    <script>
                    </script>

                </div>