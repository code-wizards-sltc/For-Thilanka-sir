<?php
    session_start();
    $_SESSION = array();

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-86400, '/' );
    }

    session_destroy();

    header('Location: http://localhost/CODE_WIZARDS/html/loging/logingcustomer.php');


?>