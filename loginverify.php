<?php


if(isset($_POST['subbtn'])) {
    include 'dbconnect.php';

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $insert = "SELECT * FROM signup WHERE username = '$uid' AND password = '$pwd'";
    $result = mysqli_query($conn, $insert);
    if(mysqli_num_rows($result) < 0) {
    }else{
        if(mysqli_fetch_assoc($result)){
        
            header("Location: login/home.php? WELCOME HOME");
            exit();
        }else{ 
            echo "login erro";
           header("Location: login.php? INVALID USERNAME");
            exit();
        }
       
    }

}