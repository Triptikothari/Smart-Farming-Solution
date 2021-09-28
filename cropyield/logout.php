<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["useremail"]);
header("Location:index.php");
?>