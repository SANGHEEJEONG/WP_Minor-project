<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        footer {
            background-color: #F5F5F5;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
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
            height: 500px;
            margin: 10px 0px 0px 0px;
            justify-content: center;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        }

        .form p{
            text-align: center;
            margin: 5cap 0px 50px 0px;
            border: 3px solid #C192DE;
            border-radius: 10px;
            font-size:20px;
        }

        .line {
            border-top: 2px solid black;
            margin: 10px 0px 50px 0px;
        }

        .ID {
            display:flex;
            margin: 100px 50px 20px 50px;
            font-size: 20px;
        }

        .ID input {
            width: 400px;
            border: 0;
            border-bottom: 1px solid black;
        }

        .Password {
            display: flex;
            margin: 0px 50px 0px 50px;
            font-size: 20px;
        }

        .Password input {
            width: 400px;
            border: 0;
            border-bottom: 1px solid black;
        } 

        .submit {
            margin: 50px 50px 50px 50px;
            display: grid;
        }

        .submit button {
            padding: 5px;
            font-size: larger;
            width: 100px;
            background-color: white;
            border: none;
            border-bottom: 3px solid black;
            cursor: pointer;
        }

        .submit a{
            margin: 20px 50px 50px 50px;
            text-align: center;
        }

        span{
            color:red;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="Logo.png" alt="logo">
        </div>
    </header>
    <div class="container">
        <h1>Login</h1>
        <div class="form">
            <form action="login_sv.php" method="post">

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <div class="ID">
                    <label for="id">ID:<span>*</span></label>
                    <input id="id" type="text" placeholder="Give your ID." name="id" required />
                </div>
                <div class="Password">
                    <label for="password">PW:<span>*</span></label>
                    <input id="password" type="password" placeholder="Give your password." name="password" required />
                </div>

                <div class="submit">
                    <button type="submit" name="login_btn">Login</button>
                    <a href="signup.php">If you are not a member yet, please click this link.</a>
                </div>
            </form>
        </div>
        <div class="line">
            <p></p>
        </div>
    </div>
    <footer>
        <p>© 2024 Sanghee Jeong. All rights reserved.</p>
    </footer>
</body>

</html>