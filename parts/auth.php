<?php
session_start();

if(isset($_SESSION['log_status']) and $_SESSION['log_status']==true){
    //The user can access
}
else{
    header('Location:login.php');
}
?>