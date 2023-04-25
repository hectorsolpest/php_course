<?php
session_start();

session_destroy();
header('Location: ../12_sessions.php');