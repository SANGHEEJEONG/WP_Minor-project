<?php

include('db.php');

$user_id = $_POST['id'];
$user_nick = $_POST['nickname'];
$user_pw = $_POST['password'];
$user_pw_ck = $_POST['password_ck'];

if(isset($user_id)&&isset($user_nick)&&isset($user_pw))
{
    if($user_pw!==$user_pw_ck)
    {
        header("location: signup.php?error=Password do not match!");
        exit();
    }
    else
    {
        $same = "SELECT * FROM member where mb_id = '$user_id'";
        $order = mysqli_query($db,$same);

        if(mysqli_num_rows($order)>0)
        {
            header("location: signup.php?error=ID is already taken.");
            exit();
        }
        else
        {
            $save = "INSERT INTO member(mb_id, mb_nickname, password) VALUES('$user_id','$user_nick','$user_pw')";
            $result = mysqli_query($db,$save);

            if($result)
            {
                header("location: signup.php?success=You have successfully registered!");
                exit();
            }
            else
            {
                header("location: signup.php?error=Registration failed.");
                exit();
            }
        }
    }
}
else
{
    header("location: signup.php?error=An unknown error has occurred.");
    exit();
}
?>