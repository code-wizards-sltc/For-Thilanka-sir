<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php
    if(!isset($_SESSION['CustomerEmail'])){
        header('Location: http://localhost/CODE_WIZARDS/html/loging/logingcustomer.php');
    }

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <style>
        .admin_name{
            margin-right : 300px;
        }
        </style>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/landingPageV4.css">
        <link rel="stylesheet" href="css/imageSlider.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
        <link rel="stylesheet" href="css/productSlider.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/popUpCustomerAccount.css">
        <link rel="stylesheet" href="">



    </head>
    
    
    
    <body>


<!--MENU BAR----------------------------------------------------------------------------------------------------------------->
        
        <div class = "logoLion">
            <a href="#"><img src = "media/lion_logo.png" alt="logo" width="100" height="100" >
            </a>
        </div>

        
        
        <div class="menuBar01">

                <div class = "storeName">
                    <h1>LION STORE</h1>
                    <hr>
                </div>
              
                <div class = "signInRegister">
                <h4>    
                <div class="admin_name">Hi <?php echo $_SESSION['CustomerFirstName']; ?>!</div>
                <a href="#" onclick="">Wish-list</a>
                &emsp;
                <a href="#" onclick="openForm03()">My Account</a>
                &emsp;
                <a href="logout.php" onclick="">Sign Out</a></h4> 
                </div>

        </div>


        


       
<div class="menuBar02">
                    
    <ul>      
    <li><a href="#">HOME </a></li>
    <li><a href="#">CATEGORY &#9660;</a>
        <div class="category">
            <ul>
                <li><a href="#">Category_0111</a></li>
                <li><a href="#">Category_02</a></li>
                <li><a href="#">Category_03</a></li>
                <li><a href="#">Category_04</a></li>
                <li><a href="#">Category_05</a></li>
            </ul>
        </div>
    <li><a href="#">ABOUT US</a></li>    
    <li><a href="#">CONTACT US</a></li>
    </li>
    </ul>


    <div class="searchBar">
        <form action="">
          <input type="text" placeholder="Search All Products..." name="search" size="40">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>

</div>
</div>

<!--/MENU BAR------------------------------------------------------------------------------------------------------------------------>





<!--IMAGE SLIDER---------------------------------------------------------------------------------------------------------------------------->

<div class="slider" id="slider1">
         
    <div>
      <img src="media/sliderPic01.png" alt="sliderPic">
    </div>
    <div>
      <img src="media/sliderPic02.jpg" alt="sliderPic">
    </div>
    <div>
      <img src="media/sliderPic03.jpg" alt="sliderPic">
    </div>
    <div>
      <img src="media/sliderPic04.png" alt="sliderPic">
    </div>
   
    
    <i class="left" class="arrows" style="z-index:2; position:absolute;">
        <svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
        </svg>
    </i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;">
        <svg viewBox="0 0 100 100">
            <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
        </svg>
    </i>

</div>

<!--/IMAGE SLIDER---------------------------------------------------------------------------------------------------------------------------->








<!--POP UP PROFILE CARD---------------------------------------------------------------------------------------------------------------------->



<div class="customerCard animate" id="myForm03">
    <img src="media/userLogo.png" alt="userPic" style="width:100%">
    <h1><?php echo $_SESSION['CustomerFirstName']; ?> <?php echo $_SESSION['CustomerLastName']; ?></h1>
    <p class="cORs">Customer</p>
    <p><?php echo $_SESSION['CustomerEmail']; ?></p>
    <p>Tele :<?php echo $_SESSION['CustomerPhoneNo']; ?></p>
   

    <a href="http://localhost/CODE_WIZARDS/html/editCustomerProfile/editCustomerProfile.php">
    <button class="ccbtn01" >Change customer Details</button></a>
    
    
</div>






<!--/POP UP PROFILE CARD--------------------------------------------------------------------------------------------------------------------->







<!--TOP SELLING ITEMS------------------------------------------------------------------------------------------------------------------------>

<div class = "productSlider01">

    <div class="heading">
        <div class = "mainHeading">
            <h1>T O P &emsp; S E L L I N G &emsp; I T E M S </h1>
        </div>
        <div class = "subHeading">
            <h4><a href="#">More Top Selling Products</a></h4>
        </div>    
    </div>

    <br>
    
<div class = "sliderContainer">
            
            
    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 01</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 02</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 03</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 04</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 05</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 06</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 07</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 08</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>


</div>
</div>



<!--/TOP SELLING PRODUCTS------------------------------------------------------------------------------------>






<!--NEW ARRIVALS---------------------------------------------------------------------------------------------->

<div class = "productSlider02">

    <div class="heading">
        <div class = "mainHeading">
            <h1>N E W &emsp; A R R I V A L S</h1>
        </div>
        <div class = "subHeading">
            <h4><a href="#">More New Arrivals</a></h4>
        </div>    
    </div>

    <br>
    
<div class = "sliderContainer">
            
            
    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 01</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 02</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 03</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 04</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 05</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 06</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 07</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>

    <div class="card">
        <img src="media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1>Product 08</h1>
        <p class="price">LKR1999</p>
        <p><button>Add to Wish-List</button></p>
    </div>


</div>
</div>



<!--/NEW ARRIVALS------------------------------------------------------------------------------>


    <br>
    <h2>Reshon's Category slide wil be added later.</h2>




<!--FOOTER-------------------------------------------------------------------------------------->
<div class="footer_balance">
    <footer>
    <div class="footer_content">
        <h3>CODE_WIZARDS</h3>
        <p>WE ARE THE MIGHTY CODE WIZARDS</p>
        <br>
        <ul class="social">
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-github"></i></a></li>
            <li><a href=""><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
    <div class="footer_bottom">
        <p>copyright &copy;2020 Design by Code_Wizards</p>
    </div>
</footer>
</div>
<!--/FOOTER-------------------------------------------------------------------------------------->


















        
        <script src="js/imageSlider.js" async defer></script>
        
        <script src="js/popUpCustomerAccount.js" async defer></script>
    </body>
</html>