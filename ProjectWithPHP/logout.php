<?php

session_start();
unset($_SESSION["firsName"]);
unset($_SESSION["uname"]);
session_destroy();
header("Location: MainPage.php");

?>