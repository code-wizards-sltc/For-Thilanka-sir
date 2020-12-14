<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/searchProductPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    </head>
    <body>

        
        <!--MENU BAR----------------------------------------------------------------------------------------------------------------->
        
        <div class = "logoLion">
            <a href="#"><img src = "../media/lion_logo.png" alt="logo" width="100" height="100" >
            </a>
        </div>

        
        
        <div class="menuBar01">

                <div class = "storeName">
                    <h1>LION STORE</h1>
                    <hr>
                </div>
              
                <div class = "signInRegister">
                <h4>     
                <a href="#" onclick="">Wish-list</a>
                &emsp;
                <a href="#" onclick="openForm()">My Account</a>
                &emsp;
                <a href="#" onclick="">Sign Out</a></h4> 
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
        <form method="post" action="searchedProductPage.php">
          <input type="text" placeholder="Search All Products..." name="search" size="40">
          <button type="submit" name="submit" ><i class="fa fa-search"></i></button>
        </form>
      </div>

</div>
</div>

<!--/MENU BAR------------------------------------------------------------------------------------------------------------------------>



<div class = "sPPTitle">
    <h1>Y O U R &emsp; S E A R C H &emsp; R E S U L T S </h1>
</div>


        
        <script src="" async defer></script>
    </body>
</html>


<?php

$con = new PDO("mysql:host=localhost;dbname=osp_db",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `products` WHERE ProductName = '$str' OR ProductID='$str'");
    

	$sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
    $chk = 0;

    
    for ($i = 0; $i <=6; $i++){
	if($row = $sth->fetch())
	{
        $chk=1;
		?>

        <div class="card">
        <img src="../media/productSlider_logo.jpg" alt="Denim Jeans" style="width:100%">
        <h1><?php echo $row->ProductName; ?></h1>
        <p class="price">LKR<?php echo $row->ProductPrice;?></p>
        <p><button>Add to Wish-List</button></p>
        </div>

        <?php 
	}
		
		



    }

    if($chk == 0){
        echo 'Sorry, there is nothing as you searched';
        

    }



}

?>