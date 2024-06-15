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
            display: grid;
            justify-content: center;
        }

        h1 {
            width: 800px;
            margin: 50px 0px 0px 0px;
            border-bottom: 2px solid black;
            justify-content: center;
        }

        .info {
            display: grid;
            margin: 10px 0px 0px 0px;
            justify-content: center;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        }

        .notice {
            margin: 10px 0px 20px 0px;
            text-align: center;
        }

        .info a {
            margin: 20px 0px 0px 0px;
            justify-content: center;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0px 50px 0px;
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
        <h1>Result</h1>
        <div class="info">
            <?php

            include('db.php');

            $diary_title = $_POST['title'];
            $diary_content = $_POST['content'];

            $diary_title = mysqli_real_escape_string($db, $diary_title);
            $diary_content = mysqli_real_escape_string($db, $diary_content);

            $save = "INSERT INTO board (title,content) VALUES('$diary_title','$diary_content')";
            $result = mysqli_query($db, $save);

            if ($result === true) {
                echo "Success to save!";
            } else {
                echo "Failed to save!";
                error_log(mysqli_error($db));
            }
            echo "<a href='main.php'>Go to main page</a>";
            ?>
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
        <p>© 2024 Sanghee Jeong. All rights reserved.</p>
    </footer>
</body>

</html>