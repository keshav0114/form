<?php
session_start();
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'signup');

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    if($password != $password2){
        array_push($errors, "Passwords don't match");
    }else{
        $password = md5($password);
        $sql = "INSERT INTO users(username, name, email, phone, password) VALUES ('$username', '$name', '$email', '$phone', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['password'] = $password;
        $_SESSION['success'] = "Logged in";
        header("location: index.php");
    }
}

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            $_SESSION['password'] = $password;
            $_SESSION['success'] = "Logged in";
            header("location: index.php");
        }else {
            array_push($errors, "Username and password doesn't match.");
        }
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['password']);
    header('location: login.php');
}
?>