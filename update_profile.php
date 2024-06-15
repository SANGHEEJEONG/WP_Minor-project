<?php
session_start();
include('db.php');

if (isset($_POST['update_btn'])) {
    $user_id = $_SESSION['user_id'];
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $password_ck = $_POST['password_ck'];

    if ($password !== $password_ck) {
        header("Location: update_profile.php?error=Passwords do not match");
        exit();
    }

    $sql = "UPDATE member SET mb_nickname='$nickname', password='$password' WHERE mb_id='$user_id'";
    if (mysqli_query($db, $sql)) {
        header("Location: update_profile.php?success=Profile updated successfully");
    } else {
        header("Location: update_profile.php?error=Failed to update profile");
    }

    header('Location: main.php');
    exit();
}
?>
