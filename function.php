<?php
include('db.php');

if(isset($_POST['like_btn'])){
    $diary_no = $_POST['diary_no'];
    
    $sql = "SELECT like_count FROM board WHERE diary_no = $diary_no";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    $like_count = $row['like_count'];


    $sql = "UPDATE board SET like_count = $like_count + 1 WHERE diary_no = $diary_no";
    mysqli_query($db, $sql);

    header('Location: main.php');
    exit();
}

if(isset($_POST['comment_btn'])){
    $diary_no = $_POST['diary_no'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (diary_no, comment) VALUES ($diary_no, '$comment')";
    mysqli_query($db, $sql);

    header('Location: main.php');
    exit(); 
}
?>
