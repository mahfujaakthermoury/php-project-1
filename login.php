<?php
session_start();
require_once ("lib/db.php");

if(isset($_POST['form_submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE  email =' $email' AND password='$password' ";
    $result = $db->query($sql);

    if($result->num_rows>0){
        $_SESSION['log_status'] = true;
        header('Location:index.php');
    }else{
        echo 'Login faield';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="POST">
        <input type="text" name="name" placeholder="Type name">
        <br><br>
        <input type="email" name="email" placeholder="Type email">
        <br><br>
        <input type="password" name="password" placeholder="Type password">
        <br><br>
        <input type="submit" value="Login" name="form_submit">
    </form>
    
</body>

</html>