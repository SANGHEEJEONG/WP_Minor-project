<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our diary space</title>
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
            display: flex;
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
            display:grid;
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

        .menu-cards {
            display: flex;
            flex-wrap: wrap;
            margin: 0 auto;
            justify-content: center;
        }

        .menu-card {
            display: inline-block;
            border: 1px solid gainsboro;
            margin: 15px;
            padding: 15px;
            width: 400px;
            height: 260px;
            overflow: auto;
        }
        
        textarea {
            width: 300px;
            border: 2px solid gainsboro;
            border-radius: 5px;
            padding: 4px;
        }

        .menu-card h2 {
            border-bottom: 1px solid #000000;
        }

        .menu-card h2 a {
            color: black;
            text-decoration: none;
        }

        .menu-card:hover {
            background-color: #F9F0FF;
        }

        .menu-card button{
            background-color: transparent;
            border:none;
            cursor: pointer;
        }

        .comment_btn button{
            padding: 5px;
            font-size: 10px;
            width: 70px;
            border: none;
            border-bottom: 3px solid black;
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
    <div class="menu-cards">
        <?php
        include('db.php');

        $sql = "SELECT * FROM board";
        $result = mysqli_query($db, $sql);

        while ($row = mysqli_fetch_array($result)) {
        ?>
            <div class="menu-card">
                <h2><a href="view.php?num=<?= $row['diary_no'] ?>"><?= $row['title'] ?></a></h2>
                <p>Diary Num: <?= $row['diary_no'] ?></p>
                <p><?= $row['content'] ?> </p>

                <form action="function.php" method="post">
                    <input type="hidden" name="diary_no" value="<?= $row['diary_no'] ?>">
                    <button type="submit" name="like_btn"><img src="like_button.png" alt="Like"></button>
                </form>

                <?php
                $diary_no = $row["diary_no"];
                $sql_likes = "SELECT like_count FROM board WHERE diary_no = $diary_no";
                $result_likes = mysqli_query($db, $sql_likes);
                $row_likes = mysqli_fetch_assoc($result_likes);
                $like_count = isset($row_likes["like_count"]) ? $row_likes["like_count"] : 0;
                ?>
                <p>Likes: <?= $like_count ?></p>

                <form action="function.php" method="post">
                    <input type="hidden" name="diary_no" value="<?= $row['diary_no'] ?>">
                    <textarea name="comment" placeholder="Write a comment"></textarea>
                    <div class="comment_btn">
                        <button type="submit" name="comment_btn">Post Comment</button>
                    </div>
                </form>
            </div>
        <?php
        }
        ?>
    </div>
    <footer>
        <ul>
            <li><a href="main.php">Diary space</a></li>
            <li><a href="write.php">Keep a diary</a></li>
            <li><a href="delete.php">Delete a diary</a></li>
            <li><a href="mypage.php">My page</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <p>© 2024 Sanghee Jeong. All rights reserved.</p>
    </footer>
</body>

</html>
