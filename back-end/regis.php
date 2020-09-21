<?php

    include 'koneksi.php';
    date_default_timezone_set("Asia/Jakarta");
    $user = $_POST['user'];
    $pass1 = $_POST['pass'];
    $pass2 = $_POST['repass'];
    $waktu =  date("H:i:s");

    $query = "insert into user set username='$user', pass='$pass2', waktu='$waktu', status='0' ";

    if($pass1 != $pass2){
        header("location: ../front-end/regis.html");
    }else{
        //echo $query;
        mysqli_query($conn, $query);
        header("location: ../front-end/login.html");
    }

?>