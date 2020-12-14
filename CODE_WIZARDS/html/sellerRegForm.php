<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db =mysqli_select_db($connection, 'osp_db');

    /*if($connection){
        echo 'connected';
    }else{
        echo 'connection error';
    }*/

    if(isset($_POST['submit'])){
        $semail = $_POST['email'];
        $spassword = $_POST['password'];
        $srepassword = $_POST['confirmPassword'];
        $sfname = $_POST['firstName'];
        $slname = $_POST['lastName'];
        $sphoneno = $_POST['phoneNo'];
        $saddress = $_POST['address'];
        $businessname = $_POST['businessName'];
        $businessphoneno = $_POST['businessPhoneNo'];
        $businessadress = $_POST['businessAddress'];
        $businesspostalcode = $_POST['postalCode'];
        

        $query = "INSERT INTO seller ( `SellerEmail`, `SellerPassword`, `SellerConfirmPassword`, `SellerFirstName`, `SellerlastName`, `SellerPhoneNo`, `SellerAddress`, `BusinessName`, `BusinessPhoneNo`,`BusinessAddress`, `BusinessPostalCode`) VALUES ('$semail','$spassword','$srepassword','$sfname','$slname','$sphoneno','$saddress','$businessname','$businessphoneno','$businessadress','$businesspostalcode')";

        $run = mysqli_query($connection,$query);
        /*if($run){
            echo 'Submitted successfully';
        }
        else{
            echo 'Submit error';
        }*/

    }






?>


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
        <link rel="stylesheet" href="../css/sellerRegForm.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" ></script>
    </head>
    <body>
        






       
<div class="menuBar">
            
    
    <div class = "logoLion">
        <a href="#"><img src = "../media/lion_logo.png" alt="logo" width="40" height="40" >
        </a>
    </div>         
    
    
    <ul>      
    <li><a href="#">HOME </a></li>
    <li><a href="#">ABOUT US</a></li>    
    <li><a href="#">CONTACT US</a></li>
    </li>
    </ul>


    <div class="signIn">
        <button class="signInBtn">SIGN IN</button>
    </div>
      


</div>


<br>

<div class = "topicName">
    <h1>S E L L E R &emsp; R E G I S T R A T I O N</h1>
</div>




    <form id="sellerRegForm" action="" method="POST">

       
        <ul id="stepBar">
            <li class="active">Account Setup</li>
            <li>Personal Details</li>
            <li>Business Details</li>
        </ul>

 
        <fieldset>
            
            <h2 class="fs-title">Create your account</h2>
            <h3 class="fs-subtitle">Step One</h3>  
            <input type="text" name="email" placeholder="Email"  />
            <input type="password" name="password" placeholder="Password" />
            <input type="password" name="confirmPassword" placeholder="Confirm Password" />
            <input type="button" name="next" class="next action-button" value="Next" />

        </fieldset>


        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">One More Step</h3>
             <input type="text" name="firstName" placeholder="First Name" />
            <input type="text" name="lastName" placeholder="Last Name" />
            <input type="text" name="phoneNo" placeholder="Phone Number" />
            <textarea name="address" placeholder="Address"></textarea>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
          </fieldset>


        <fieldset>
            
            <h2 class="fs-title">Business Details</h2>
            <h3 class="fs-subtitle">Almost Done</h3>
            
            <input type="text" name="businessName" placeholder="Business Name" />
            <input type="text" name="businessPhoneNo" placeholder="Business Phone Number" />
            <textarea name="businessAddress" placeholder="Business Address"></textarea>
            <input type="text" name="postalCode" placeholder=" Business Postal Code" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <button type="submit" name="submit">Submit</button>

        </fieldset>

    


    
    </form>


        
        <script src="../js/sellerRegForm.js" ></script>
    </body>
</html>




