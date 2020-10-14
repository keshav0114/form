<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration using PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
            <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 1px;
        }
        .box1{
            display: flex;
            flex-direction: column;
            height: 100vh;
            align-items: center;
            justify-content: center;
            background-color: #fafafa;
        }
        .box2{
            width: 500px;
            background-color: white;
            box-shadow: 0px 3px 18px lightgrey;
        }
        .header {
            text-align: center;
            background-color:#229d8e ;
            color: white;
            padding: 15px;
        }

        .input-group {
            margin: 15px auto;
            padding: 0 30px;
            font-size: 17px;
        }

        .input-group .btn {
            padding: 5px;
            background: white;
        }

        input
        {
            background-color: white;
            padding: 5px;
            border-radius: 5px;
            border-color: 1px solid black;
            outline: none;
        }
        lable{
            display: block;
        }

        #username,
        #password{
            padding: 5px;
            outline: none;
            display: block;
            width: 250px;
            margin-top: 3px;
            font-size: 13px;
            border: none;
            border-bottom: 1px solid lightgray;
        }

        #signup {
            margin: 30px auto;
            text-align: center;
        }
        #signup a {
            text-decoration: none;
            color: blue;
        }
        .btn {
            border: 2px solid #229d8e;
            border-radius: 3px;
            height: 35px;
            width: 150px;
            cursor: pointer;
            color: #229d8e;
        }
    </style>
</head>

<body>
<div class="box1">
  <div class="box2">
    <div class="header">
        <h2>Login Here</h2>
    </div>

    <form action="login.php" method="post">
        <div class="input-group">
            <label>Username
            <input type="text" required name="username" id="username" placeholder="Username*">
            </label>
        </div>
        <div class="input-group">
            <label>Password
            <input type="password" required name="password" id="password" placeholder="Password*">
            </label>
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
    </form>
    <div id="signup">
        New around here? <a href="register.php">Sign up Here</a>
    </div>
  </div>
</div>
</body>

</html>