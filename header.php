<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" href="./images/ecommerce.png">
    <title>Techshop</title>
</head>

<body>
    <header>
        <div class="headers">
            <div class="top">
                <p>Connect with Us</p>
                <div class="socialmedia">
                    <a href="https:www.facebook.com" id="" class="fa fa-facebook" target="_blank"></a>
                    <a href="https:www.instagram.com" id="instagram" class="fa fa-instagram" target="_blank"></a>
                    <a href="https:www.twitter.com" id="twitter" class="fa fa-twitter" target="_blank"></a> &nbsp; &nbsp;|
                    <p><a href="">Call Us +977981653</a> </p>
                </div>


            </div>

            <div class="navigation">
                <a href="index.php" style="color: #e03131;">SELL ON TECHSHOP</a>&nbsp; |
                <a href=" help.php">HELP CENTER</a>&nbsp; |</a>
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
                <a style="text-decoration:none" ><img src="images/user-circle.png" height="23px" width="20px"></img>
                    <button class="open-button" onclick="myFunction()">
                     <p font-size:8px> Namaste,Sign in
                        <b font-size:10px>My Account</b></p></button></a>
                </a>
              
                <div class="form-popup" id="myform"style="display: none;" >
                    <form  class="form-container">
                  <button type="submit" class="btn"><a style="text-decoration:none" href="signup.php">Sign in</a> </button>
                   
                   <label class="new">New Customer?</label>

                  
                       <button type="submit" class="btn-start"><a style="text-decoration:none" href = "register.php">Start here</button></a>
                    </form>


                    <script>
                        function myFunction(){
                            var x = document.getElementById("myform");
                            if(x.style.display === "none"){
                                x.style.display="block";
                            } else{
                                x.style.display ="none"
                            }
                        }
                    </script>
                
                  
             </div>
            </div>



            <div class="cart">
                <a style="text-decoration:none" href=" "> <img src="images/cart.png" height="20px" width="30px">
                   <button  style="color:rgb(41, 37, 37);font-size: 13px";><b> My Cart</button>

                   <script>
                   //creating array that hold all ordered products
                   var shoppingCart = [];

                   function displayShoppingCart(){
                       
                   }

                   
                   </script>

            </div>

            <div class="navbar">
                <a style="text-decoration:none" href=" "><b> HOME</b></a>
                <a style="text-decoration:none" href=" "><b> TOP OFFER</b></a>
                <a style="text-decoration:none" href=" "><b>ELECTRONICS</b></a>
                <a style="text-decoration:none" href=" "><b>HEADPHONES & SPEAKER</b></a>
                <a style="text-decoration:none" href=" "><b> TV & Applications</b> </a>
            </div>

