<?php
/*
Sessions are a way to store information (in variables) to be used
across multiple page.
Unlike cookies, sessions are stored on the server
 */

session_start();
if ($_POST)
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "admin")
    {
        $_SESSION['username'] = $username;
        header('Location:/php_course/extras/dashboard.php');
    }
    else
    {
        echo "User and/or Password Incorrect";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="12_sessions.php" method="post">
    User:
    <input type="text" name="username">
    Password:
    <input type="password" name="password">
    <input type="submit" value="Submit">
</form>
</body>
</html>