<?php

include 'lib/db.php';

if(isset($_GET['si_no'])){
    $id = $_GET['si_no'];
    $sql = "DELETE FROM product WHERE si_no=".$id;
    $status = $db->query($sql);

    if($status){
        echo 'Delete successfully';
    }else{
        echo 'Something wrong';
    }
}


//Redirect page to home page
header('Location:index.php');
?>