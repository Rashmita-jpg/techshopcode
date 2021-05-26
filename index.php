


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
                <a style="text-decoration:none" href=" "><b>UPCOMING ITEMS</b></a>
                <a style="text-decoration:none" href=" "><b>ALL&nbsp; LAPTOP'S</b> </a>
            </div>


            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->

                <div class="mySlides fade">
                    <img src="images/laptop4.png" width="100%" height="2%"></img>
                </div>
               
                <div class="mySlides fade">
                    <img src="images/laptop3.png" width="100%" height="2%"></img>
                </div>

                <div class="mySlides fade">
                    <img src="images/laptop5.png" width="100%" height="10%"></img>
                </div>

                <div class="mySlides fade">
                    <img src="images/laptop6.png" width="100%" height="10%"></img>
                </div>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>


                </div>


               <script src="./scripts/source.js"></script>

               


                <div class="dealsofday">
                    <h3> Upcoming Items</h3>
                    <hr>
                </div>

                <div class="imageofday">
                     <div class=image>
                      <a href="#" > <img src="images/images2.png" height="168px" width="170px"></img></a><br>
                    <h5>GGMM Original<br> Portable Battery Base<br> For Amazon Echo</h5>
                    <p style="color:hsla(0,100%,50%,1);">Rs 570</p>
                    </div>


                    <div class=image>
                      <a href=" "> <img src="images/images4.png" height="168px" width="170px"></img></a>
                     <h5> SDETER H.265 8CH<br> Wireless CCTV System<br> 1536P 1080P NVR</h5>
                      <p style="color:hsla(0,100%,50%,1);">Rs 1170</p>
                    </div>


                    <div class=image>
                      <a href=" ">  <img src="images/images5.png" height="168px" width="170px"></img></a>
                    <h5>SanDisk Ultra<br> Micro SD<br> Card 128GB</h5> 
                      <p style="color:hsla(0,100%,50%,1);">Rs1570</p>
                    </div>


                    <div class=image>
                     <a href=" ">  <img src="images/images6.png" height="168px" width="170px"></img></a>
                    <h5>DACOM ATHLETE<br> TWS Bluetooth Earbuds<br> Bass True Wireless </h5>
                     <p style="color:hsla(0,100%,50%,1);">Rs 2970</p>
                    </div>


                    <div class=image>
                      <a href=" ">  <img src="images/image4.png" height="168px" width="170px"></img></a>
                      <h5>Mixcder E9 PRO<br> aptX LL Headphones<br> Wireless Bluetooth</h5>  
                      <p style="color:hsla(0,100%,50%,1);">Rs 1970</p>
                    </div>

                    <div class=image>
                        <a href=" ">  <img src="images/images1.png" height="168px" width="170px"></img></a>
                       <h5> Genuine Original<br> New Apple<br> iPhone X 5.8"</h5>
                        <p style="color:hsla(0,100%,50%,1);">Rs 50700</p>
                    </div>
                
                  

                </div>


                  
                <br><br>

        
               
              
              
              
              
              
              
                 <div class="categories">
                 <h5> BEST OF Electronics<hr></h5>
                </div>
            
                    <div class="ecategories">
                                             
                        <div class="bestcategories">
                            <a href="post.php ">  <img src="images/images13.png" height="328px" width="380px"></img></a>
                        </div>
    
                        <div class="bestcategories">
                            <a href="post.php ">  <img src="images/image1.png" height="328px" width="920px"></img></a>
                        </div>
                        
                    </div>
                    
                    <div class="bestcategories">
                        <a href=" ">  <img src="images/image2.png" height="288px" width="290px"></img></a>
                        <a href=" ">  <img src="images/image3.png" class="audioaccess" height="288px" width="470px"></img></a>
                        <a href=" ">  <img src="images/image5.png" height="300px" width="550px"></img></a>
                        
                        
                    </div>

                    <div class="fotter"><br><br>
                    <b>Techshop: The One-stop Shopping</b> 
                        
     <p>E-commerce is revolutionizing the way we all shop in Nepal. 
         Why do you want to hop from one store to another in search of
          the latest phone when you can find it on the Internet in a single 
           click? Not only mobiles. Techshop houses everything you can possibly imagine,
           from trending electronics like laptops, tablets, smartphones, and mobile accessories
            to in-vogue fashion staples like shoes, clothing and lifestyle accessories; from modern 
            furniture like sofa sets, dining tables, and wardrobes to appliances that make your life 
            easy like washing machines, TVs, ACs, mixer grinder juicers and other time-saving kitchen and 
            small appliances; from home furnishings like cushion covers, mattresses and bedsheets to toys and
             musical instruments, we got them all covered. You name it, and you can stay assured about finding 
              them all here. For those of you with erratic working hours, Techshop is your best bet. Shop in your
              PJs, at night or in the wee hours of the morning. This e-commerce never shuts down.
         What's more, with our year-round shopping festivals and events, our prices are irresistible. We're sure
          you'll find yourself picking up more than what you had in mind. If you are wondering why you should shop
           from Techshop when there are multiple options available to you, well, the below will answer your question.</p><br><br>

<b>Techshop Plus</b><br>
<p> A world of limitless possibilities awaits you - Techshop Plus was kickstarted as a loyalty reward programme for all 
its regular customers at zero subscription fee. All you need is 500 supercoins to be a part of this service. For every 
100 rupees spent on Techshop order, Plus members earns 4 supercoins & non-plus members earn 2 supercoins. Free 
delivery, early access during sales and shopping festivals, exchange offers and priority customer service are the top
 benefits to a techshop Plus member. In short, earn more when you shop more!</p><br><br>

 

  <b>LATEST LAPTOPS</b><br>
     <p>Apple Laptops, Samsung Laptops, Asus Laptops, Acer Laptops, HP Laptops, Dell Laptops.</p>                
  </div>
                     

                   
            <div class = footer-last>
              <p> Copyright &#169; 2021 All Rights Reserved </p>
                </div>
    </header>
</body>

</html>