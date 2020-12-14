<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php
    //check for form submission

        if (isset($_POST['submit'])){
            $errors = array();
            // check user name and password

            if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
                $errors[] = 'Invalid user name or missing username';

            }
            if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1){
                $errors[] = 'Invalid password or missing password';

            }
            //check  errors
            if (empty($errors)){

                
            //save user name and passsword into variables
                $email = mysqli_real_escape_string($connection, $_POST['email']);
                $psw   = mysqli_real_escape_string($connection, $_POST['password']);
                
            //prepare database query
                $query = "SELECT * FROM customer WHERE CustomerEmail  = '{$email}' AND CustomerPassword  ='{$psw}' LIMIT 1 ";
                $result_set = mysqli_query($connection, $query);

                if ($result_set){
                    //query successful
                    if (mysqli_num_rows($result_set) == 1){
                        //valid user found
                        $user = mysqli_fetch_assoc($result_set);
                        $_SESSION['CustomerID'] = $user['CustomerID'];
                        $_SESSION['CustomerFirstName'] = $user['CustomerFirstName'];
                        $_SESSION['CustomerLastName'] = $user['CustomerLastName'];
                        $_SESSION['CustomerEmail'] = $user['CustomerEmail'];
                        $_SESSION['CustomerPhoneNo'] = $user['CustomerPhoneNo'];
                        $_SESSION['CustomerPhoneNo'] = $user['CustomerPhoneNo'];


                        header('Location: http://localhost/CODE_WIZARDS/html/SignedInCustomerPage/SignedInCustomerPage.php#');
                    }else {
                        //user name and passerd invalid
                        $errors[] = 'Invalid username/ password';
                    }
                    
                }else{
                    $errors[] = 'Database query failed';
                }

            //check if there is a user

            //connect to user profile

            //else show error
            }


        }

    
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>


    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/menubar.css">
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
        
        
           
              
        
        
        </div>
        <form action="" method="POST">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="email" placeholder="Email">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="password" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn">Login</button>
  <?php

  if (isset($errors) && !empty($errors)){
  echo '<p class="error">Invalid username/password</p>';
  }


?>
  
</div>
      </form>
  </body>
</html>
