<?php
session_start();

include('db.php');

$user_id = $_POST['id'];
$user_pw = $_POST['password'];

if (isset($user_id) && isset($user_pw)) {
    $sql = "SELECT * FROM member WHERE mb_id = '$user_id'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $save_pw = $row['password'];

        if ($user_pw == $save_pw) {

            $_SESSION['user_id'] = $row['mb_id']; 
            $_SESSION['user_nickname'] = $row['nickname']; 
            
            header("location: main.php");
            exit();

        } 
        else {
            header("location: login.php?error=Login failed.");
            exit();
        }
    } else {
        header("location: login.php?error=Login failed.");
        exit();
    }
} else {
    header("location: login.php?error=An unknown error has occurred.");
    exit();
}
?>
