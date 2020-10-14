<?php
include('server.php');

if(empty($_SESSION['username'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration using PHP</title>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Righteous', cursive;
            background-color: rgb(229 202 255);
            letter-spacing: 1px;

        }

        .header {
            margin: 20px auto;
            text-align: center;
        }
        .details {
            margin: 30px auto;
            text-align: center;
        }

        #logout {
            margin: 30px auto;
            text-align: center;
        }

        #logout a {
            text-decoration: none;
            color: red;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Home</h2>
    </div>
    <div class="details">
        <?php if(isset($_SESSION['success'])):?>
        <div class="error success">
            <h2>
                <?php
                // echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h2>
        </div>
        <?php endif ?>

        <?php if(isset($_SESSION['username'])): ?>
            <h4 style="margin: 20px;">Welcome <?php echo $_SESSION['username']; ?></h4>
            <?php endif ?>
    </div>

    <div id="logout">
        <a href="index.php?logout='1'">Logout</a>
    </div>
</body>

</html>