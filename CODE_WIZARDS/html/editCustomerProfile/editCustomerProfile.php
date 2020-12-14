<?php
     $connection = mysqli_connect("localhost", "root", "");
     $db =mysqli_select_db($connection, 'osp_db');
 
     if($connection){
         echo 'connected';
     }else{
         echo 'connection error';
     }
     if(isset($_POST['submit'])){

        $ctele = $_POST['phoneNo'];
        $query = "UPDATE `customer` SET CustomerEmail='$_POST[email]',CustomerPassword='$_POST[password]',CustomerConfirmPassword='$_POST[confirmPassword]',CustomerFirstName ='$_POST[firstName]',CustomerLastName ='$_POST[lastName]',CustomerAddress ='$_POST[address]' WHERE CustomerPhoneNo ='$_POST[phoneNo]' ";

        $run_query =mysqli_query($connection,$query);

        if($run_query){
            echo '<script type="text/javascript">alert("Data updated..!")</script>';
        }else{
            echo '<script type="text/javascript">alert("Data not updated..!")</script>';
        }


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
        <link rel="stylesheet" href="css/editCustomerProfile.css">
    </head>
    <body>




        <div class="menuBar">
            
    
            <div class = "logoLion">
                <a href="#"><img src = "media/lion_logo.png" alt="logo" width="40" height="40" >
                </a>
            </div>         
            
            
            <ul>      
            <li><a href="#">HOME </a></li>
            <li><a href="#">ABOUT US</a></li>    
            <li><a href="#">CONTACT US</a></li>
            </li>
            </ul>
        
        
            <div class="signIn">
                <button class="myAccBtn">My Account</button>
            </div>
              
        
        
        </div>










        <div class="eCPHeader">
            <h1>E D I T &emsp; Y O U R &emsp; C U S T O M E R &emsp; P R O F I L E</h1>
        </div>

        <br><br><br>



  
        
        <div class="leftPart">
        <div class="cPPHeader">
            <h3>Profile Picture</h3>
        </div>
        <div class="customerProfilePic">
            <img src="media/userLogo.png" alt="customerPic" style="width:100%">
        </div>
        <button class="cPPBtn01">Change Picture</button>
        </div>
        



        <div class="rightPart">


        <div class="cPPHeader02">
            <h3>Personal Details</h3>
        </div>
        <form action="" method="POST">
        <input type="text" name="firstName" placeholder="First Name" /><br>
        <input type="text" name="lastName" placeholder="Last Name"/><br>
        <input type="text" name="phoneNo" placeholder="Phone Number"/><br>
        <textarea name="address" placeholder="Address" ></textarea><br>
        <input type="text" name="email" placeholder="Email"/><br>
        <input type="password" name="password" placeholder="Password"/><br>
        <input type="password" name="confirmPassword" placeholder="Confirm Password"/><br>

        <button type="submit" name="submit">Save New Personal Details</button>
        </form>

        </div>

    
























        
        <script src="" async defer></script>
    </body>
</html>