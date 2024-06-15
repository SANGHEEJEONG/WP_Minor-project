<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Diary Space</title>
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
            display: grid;
            width: 800px;
            margin: 10px 0px 0px 0px;
            justify-content: center;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0px 50px 0px;
        }

        .ID {
            display: grid;
            margin: 50px 50px 20px 50px;
            font-size: 20px;
        }

        .ID input {
            width: 400px;
            margin-top: 15px;
            border: 0;
            border-bottom: 1px solid black;
        }

        .Nickname {
            display: grid;
            margin: 0px 50px 20px 50px;
            font-size: 20px;
        }

        .Nickname input {
            width: 400px;
            margin-top: 15px;
            border: 0;
            border-bottom: 1px solid black;
        }

        .Password {
            display: grid;
            margin: 0px 50px 20px 50px;
            font-size: 20px;
        }

        .Password input {
            width: 400px;
            margin-top: 15px;
            border: 0;
            border-bottom: 1px solid black;
        }

        .Password_ck {
            display: grid;
            margin: 0px 50px 20px 50px;
            font-size: 20px;
        }

        .Password_ck input {
            width: 400px;
            margin-top: 15px;
            border: 0;
            border-bottom: 1px solid black;
        }

        .save {
            margin: 50px 50px 50px 50px;
            display: grid;
        }

        .save button {
            padding: 5px;
            font-size: larger;
            width: 100px;
            background-color: white;
            border: none;
            border-bottom: 3px solid black;
            cursor: pointer;
        }

        .save a {
            margin: 20px 50px 50px 50px;
            text-align: center;
        }

        span {
            color: red;
        }
    </style>
    <?php
    session_start();
    ?>
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
        <h1>Update Profile</h1>
        <div class="form">
            <form action="update_profile.php" method="post">

                <?php
                include('db.php');

                $user_id = $_SESSION['user_id'];

                $sql = "SELECT * FROM member WHERE mb_id = '$user_id'";
                $result = mysqli_query($db, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>

                <div class="ID">
                    <label for="id">ID:</label>
                    <p><?php echo $row['mb_id']; ?></p>
                </div>
                <div class="Nickname">
                    <label for="nickname">Nickname:<span>*</span></label>
                    <input id="nickname" type="text" value="<?php echo $row['mb_nickname']; ?>" name="nickname" required />
                </div>
                <div class="Password">
                    <label for="password">Password:<span>*</span></label>
                    <input id="password" type="password" placeholder="New password" name="password" required />
                </div>
                <div class="Password_ck">
                    <label for="password_ck">Password check:<span>*</span></label>
                    <input id="password_ck" type="password" placeholder="Confirm new password" name="password_ck" required />
                </div>
                <div class="save">
                    <button type="submit" name="update_btn">Update</button>
                </div>
            </form>
        </div>
        <div class="line">
            <p></p>
        </div>
    </div>
    <footer>
        <nav>
            <ul>
                <li><a href="main.php">Diary space</a></li>
                <li><a href="write.php">Keep a diary</a></li>
                <li><a href="delete.php">Delete a diary</a></li>
                <li><a href="mypage.php">My page</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <p>© 2024 Sanghee Jeong. All rights reserved.</p>
    </footer>
</body>

</html>