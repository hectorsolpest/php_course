<?php
session_start();

if($_SESSION['username'])
{
    echo "Welcome " . $_SESSION['username'];
    echo "<a href='logout.php'>Logout</a>";
}
else
{
    echo "Welcome guest";
    echo "<a href='../12_sessions.php'>Login</a>";
}