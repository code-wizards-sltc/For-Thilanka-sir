
<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db =mysqli_select_db($connection, 'osp_db');
    
    /*if($connection){
        echo 'connected';
    }else{
        echo 'connection error';
    }*/
    //check for form submission

        if (isset($_POST['submit1'])){
            $errors = array();
            // check user name and password

            if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1){
                $errors[] = 'Invalid user name or missing username';

            }
            if (!isset($_POST['psw']) || strlen(trim($_POST['psw'])) < 1){
                $errors[] = 'Invalid password or missing password';

            }
            //check  errors
            if (empty($errors)){

                
            //save user name and passsword into variables
                $email = mysqli_real_escape_string($connection, $_POST['email']);
                $psw   = mysqli_real_escape_string($connection, $_POST['psw']);
                
            //prepare database query
                $query = "SELECT * FROM customer 
                        WHERE 	CustomerEmail = '{$email}'
                        AND CustomerPassword  ='{$psw}'  ;
                        LIMIT 1 ";
                $result_set = mysqli_query($connection, $query);

                if ($result_set){
                    //query successful
                    if (mysqli_num_rows($result_set) == 1){
                        //valid user found
                        header('Location: users.php');
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="formContainer" action="" method="POST">
      

    
      <h1>Login</h1>
    
    <button type="submit" class="btnCancel animate" onclick="closeForm()">X</button>
  
  
  <br>
  
  <input type="text" placeholder="Enter Email" name="email" required>

  
  <input type="password" placeholder="Enter Password" name="psw" required>

  <button type="submit" class="btn" name="submit">Login</button>
  <?php

    if (isset($errors) && !empty($errors)){
    echo '<p class="error">Invalid username/password</p>';
    }


?>
  
</form>
    
</body>
</html>