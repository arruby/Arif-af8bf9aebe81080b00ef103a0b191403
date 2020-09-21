<?php

    include 'koneksi.php';
    date_default_timezone_set("Asia/Jakarta");
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $waktu =  date("H:i:s");
    $login = mysqli_query($conn, "select * from user where username='$user' and pass='$pass'");
    $result = mysqli_num_rows($login);
    //echo $result;

    if($result > 0){
        $user = mysqli_fetch_array($login);
        $id = $user['id'];
        //echo $id;
        $updatewaktu = "update user set status = '1', waktu = '$waktu' where id='$id'";
        $update = mysqli_query($conn, $updatewaktu);

        session_start();
        $_SESSION['id'] = $user['id'];
        header("location: ../front-end");
    }else{
        header("location: ../front-end/login.html");
    }

?>