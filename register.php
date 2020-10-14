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
        .input-fields{
            
        }
        lable{
            display: block;
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

        #username,
        #fullname,
        #email,
        #phone,
        #password,
        #password2 {
            padding: 5px;
            outline: none;
            display: block;
            width: 250px;
            margin-top: 3px;
            font-size: 13px;
            border: none;
            border-bottom: 1px solid lightgray;
        }

        #login {
            margin: 30px auto;
            text-align: center;
        }
        #login a {
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
        <h2>Register Here</h2>
    </div>

    <form action="register.php" method="post" class="input-fields">
        <div class="input-group">
        <label>Username
            <input type="text" required name="username" id="username" placeholder="Username*">
        </label>
        </div>
        
        
        <div class="input-group">
            <label>Full Name
            <input type="text" required name="name" id="fullname" placeholder="Full Name*">
        </label>
        </div>
        
        
        <div class="input-group">
            <label>Email
            <input type="email" required name="email" id="email" placeholder="Email*">
        </label>
        </div>
        
        
        <div class="input-group">
            <label>Phone
            <input type="phone" name="phone" id="phone" placeholder="Phone">
        </div>
        
        
        <div class="input-group">
            <label>Password
            <input type="password" required name="password" id="password" placeholder="Password*">
        </label>
        </div>
        
        
        <div class="input-group">
            <label>Confirm Password
            <input type="password" required name="password2" id="password2" placeholder="Confirm Password*">
        </label>
        </div>
        
        
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>


    </form>
    <div id="login">
        Already a User? <a href="login.php">Login Here</a>
    </div>
  </div>
</div> 
</body>
</html>