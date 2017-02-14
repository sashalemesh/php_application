<?php
include "config1.php";
//добавляем пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim(strip_tags($_POST['name']));
    $advert = trim(strip_tags($_POST['advert']));
    $result = mysql_query("INSERT INTO " . $db_table_user . " (user_name) VALUES ('$name')");
    $result = mysql_query("INSERT INTO " . $db_table_adver . " (title,user_id) VALUES ('$advert',
(SELECT user_id FROM $db_table_user WHERE user_name = '$name'))");
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}
?>


