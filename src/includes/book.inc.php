<?php

if(isset($_POST['submit'])){
    
    $name   = $_POST['name'];
    $email       = $_POST['email'];
    $phone   = $_POST['phone'];
    $date    = $_POST['date'];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    
    if (emptyInputBooking($name, $email) !== false) {
        header("location: ../book.php?error=emptyinput");
        exit();
    }

    createBooking($conn, $name,$email,$phone,$date);
}else{
    header("location:../book.php");
    exit();
}