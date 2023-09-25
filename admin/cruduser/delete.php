<?php
require_once "../config.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sqlstr = "DELETE from user WHERE id=$id";
    $result = $conn->query($sqlstr);
    if($result){
        header('location: display.php');
    } else {
        die(mysqli_error($conn));
    }
}