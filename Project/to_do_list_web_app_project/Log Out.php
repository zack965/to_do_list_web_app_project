<?php
session_start();
unset($_SESSION["useremaill"]);
unset($_SESSION["userpasswordd"]);
unset($_SESSION["uid"]);
unset($_SESSION["Categorie_name"]);
unset($_SESSION["UFN"]);
unset($_SESSION["lol"]);
unset($_SESSION["uname"]);
unset($_SESSION["lname"]);
unset($_SESSION["fname"]);
unset($_SESSION["user_id"]);
unset($_SESSION["profilname"]);
unset($_SESSION["profilpath"]);
/*
unset($_SESSION["uname"]);
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
*/

header("Location:login page/log_in_page.php");
?>