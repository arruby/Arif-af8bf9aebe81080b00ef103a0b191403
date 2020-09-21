<?php
    include 'koneksi.php';
    session_start();
    $id = $_SESSION['id'];

    $ambil = mysqli_query($conn, "select * from user where id='$id'");
    $result = mysqli_num_rows($ambil);

    if($result > 0){
        $user = mysqli_fetch_array($ambil);
        //cho $user['status'];
        if($user['status'] == '1'){
            echo "Hai ".$user['username'].", waktu login anda ".$user['waktu'];
        }
        else{
            header("location: ../front-end/login.html");
        }
    }

?>