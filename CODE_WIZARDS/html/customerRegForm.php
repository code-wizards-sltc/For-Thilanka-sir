<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db =mysqli_select_db($connection, 'osp_db');

    /*if($connection){
        echo 'connected';
    }else{
        echo 'connection error';
    }*/

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['confirmPassword'];
        $fname = $_POST['firstName'];
        $lname = $_POST['lastName'];
        $phoneno = $_POST['phoneNo'];
        $address = $_POST['address'];

        $query = "INSERT INTO customer ( `CustomerEmail`, `CustomerPassword`, `CustomerConfirmPassword`, `CustomerFirstName`, `CustomerLastName`, `CustomerPhoneNo`, `CustomerAddress`) VALUES ('$email','$password','$repassword','$fname','$lname','$phoneno','$address')";

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
<!--[if gt IE 8]>      <html class="no-js"> <[endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/customerRegForm.css">
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
    <h1>C U S T O M E R &emsp; R E G I S T R A T I O N</h1>
</div>




    <form id="customerRegForm" action="" method="POST">

       
        <ul id="stepBar">
            <li class="active">Account Setup</li>
            <li>Personal Details</li>
        </ul>

 
        <fieldset>
            
            <h2 class="fs-title">Create your account</h2>
            <h3 class="fs-subtitle">Step One</h3>
            
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="password" name="confirmPassword" placeholder="Confirm Password"/>

            <input type="button" name="next" class=" next action-button" value="Next" onclick="checking01()" />

        </fieldset>

 
        <fieldset>
            
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">Almost Done</h3>
            
            <input type="text" name="firstName" placeholder="First Name"/>
            <input type="text" name="lastName" placeholder="Last Name"/>
            <input type="text" name="phoneNo" placeholder="Phone Number"/>
            <textarea name="address" placeholder="Address"></textarea>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <button type="submit" name="submit">Submit</button>

        </fieldset>

    </form>



        
        <script src="../js/customerRegForm.js" ></script>
    </body>
</html>