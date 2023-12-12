<?php
session_start();
unset($_SESSION["user_account"]);
header("Location: ../View/homepage.php")


?>