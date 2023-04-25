<?php
/*
    $_GET and $_POST Superglobals

    We can pass data through urls and forms using $_GET and $_POST
*/

if ($_POST)
{
    echo $_POST['name'];
    echo $_POST['age'];
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
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <input type="submit" value="Submit">
</form>
</body>
</html>