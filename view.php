<?php
include('db.php');
$number = $_GET['num'];
$sql = "SELECT * FROM board WHERE diary_no = $number";
$result = mysqli_query($db, $sql);

$sql_comments = "SELECT * FROM comments WHERE diary_no = $number";
$result_comments = mysqli_query($db, $sql_comments);

$sql_likes = "SELECT like_count FROM board WHERE diary_no = $number";
$result_likes = mysqli_query($db, $sql_likes);
$row_likes = mysqli_fetch_assoc($result_likes);
$like_count = isset($row_likes["like_count"]) ? $row_likes["like_count"] : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0 auto;
        }

        .logo {
            display: flex;
            justify-content: center;
        }

        .logo img {
            width: 150px;
            margin: 5px;
        }

        nav,
        footer {
            display: float;
            border-top: 1px solid gainsboro;
            border-bottom: 1px solid gainsboro;
            justify-content: center;
            text-align: center;
        }

        nav ul,
        footer ul {
            display: flex;
            list-style: none;
            justify-content: center;
        }

        footer {
            background-color: #F5F5F5;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        nav ul li a,
        footer li a {
            color: black;
            font-size: 20px;
            display: block;
            padding: 8px 50px 8px 50px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #EDEDED;
        }

        .container {
            width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin: 50px 0px 0px 0px;
            border-bottom: 2px solid black;
        }

        .info {
            margin: 10px 0px 0px 0px;
            justify-content: center;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        }

        .info h3 {
            margin: 20px;
        }

        .content {
            margin: 20px;
        }

        .info a {
            margin: 20px;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0px 50px 0px;
        }

        .comments {
            margin-top: 20px;
        }

        .comment {
            background-color: #F9F0FF;
            padding: 10px;
            border-radius: 5px;
            margin:5px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="Logo.png" alt="logo">
        </div>
        <nav>
            <ul>
                <li><a href="main.php">Diary space</a></li>
                <li><a href="write.php">Keep a diary</a></li>
                <li><a href="delete.php">Delete a diary</a></li>
                <li><a href="mypage.php">My page</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Diary</h1>
        <div class="info">
            <?php if ($row = mysqli_fetch_array($result)) { ?>
                <h3>Num: <?= $row['diary_no'] ?> </h3>
                <h3>Title: <?= $row['title'] ?></h3>
                <div class='content'>
                    <?= $row['content'] ?>
                </div>
            <?php } ?>
            <p>Likes: <?= $like_count ?></p>
            <div class="comments">
                <h3>Comments:</h3>
                <?php while ($row_comment = mysqli_fetch_assoc($result_comments)) { ?>
                    <div class="comment">
                        <?= $row_comment['comment'] ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="line">
            <p></p>
        </div>
    </div>
    <footer>
        <ul>
            <li><a href="main.php">Diary space</a></li>
            <li><a href="write.php">Keep a diary</a></li>
            <li><a href="delete.php">Delete a diary</a></li>
            <li><a href="mypage.php">My page</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <p>© 2024
</body>

</html>