<?php

session_start();
unset($_SESSION["firsName"]);
session_destroy();
header("Location: MainPage.html");

?>