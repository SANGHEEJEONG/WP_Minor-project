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
            margin: 50px 0px 0px 0px;
            border-bottom: 2px solid black;
            justify-content: center;
        }

        .form {
            margin: 10px 0px 0px 0px;
            justify-content: center;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0px 50px 0px;
        }

        .info {
            margin: 50px 50px 20px 50px;
            font-size: 20px;
        }

        .del_num {
            margin: 50px 50px 20px 50px;
            font-size: 20px;
        }

        .del_num input {
            width: 800px;
            border: 0;
            border-bottom: 1px solid black;
        }

        .content {
            display: grid;
            margin: 0px 50px 0px 50px;
            font-size: 20px;
        }

        .delete {
            margin: 50px 50px 50px 50px;
        }

        .delete input {
            padding: 5px;
            font-size: larger;
            width: 100px;
            background-color: white;
            border: none;
            border-bottom: 3px solid black;
            cursor: pointer;
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
        <h1>Delete a diary</h1>
        <div class="form">
            <form action="delresult.php" method="post">
                <div class="info">
                    <h3>Please enter your diary number to delete</h3>
                </div>
                <div class="del_num">
                    <label for="del_num">Number:</label>
                    <input type="text" id="del_num" name="del_num">
                </div>
                <div class="delete">
                    <input type="submit" value="delete">
                </div>
            </form>
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