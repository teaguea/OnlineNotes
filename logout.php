<?php
if(isset($_SESSION['user_id']) && $_GET['logout'] == 1){
    
    //unset($_SESSION['user_id']);
    //setcookie('rememberme',NULL,0);
    //header('location:index.php');
    session_destroy();
    setcookie("rememberme", "", time()-3600);

}

?>