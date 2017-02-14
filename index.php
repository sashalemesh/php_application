<?php
header("Content-Type:text/html;charset=utf-8");
?>
<html>
<head>
    <title>Каталог</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container" align="center">

<h4><a href='users/index.php'>Users</a><br></h4>
<h4><a href='advertisements/index.php'>Advertisements</a><br></h4>


<?php
include "setings/config1.php";
$name = 'Петр';
$name1 = 'Продам петуха';


   // $result = mysql_query("INSERT INTO " . $db_table_user . " (user_name) VALUES ('wer1')");
   // $result = mysql_query("INSERT INTO " . $db_table_adver . " (title,user_id) VALUES ('Продам петуха1',
//(SELECT user_id FROM $db_table_user WHERE user_name = 'wer1'))");






?>
</div>
<!--Вывод меню -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
