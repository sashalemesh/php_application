<?php
header("Content-Type:text/html;charset=utf-8");
include "setings/dobavlenie.php";
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

    <form method="POST" class="center-block form-review" action="<?php $_SERVER["PHP_SELF"]?>">
        <h1>Пользователи</h1>
        <label for="name">Имя для добавления:</label><br/>
        <input name="name" class="form-control" type="text" placeholder="Имя"/>
        <label for="advert">Ваша рекламма:</label><br/>
        <textarea class="form-control" name="advert" id="review" rows="5" required placeholder="Рекламма"></textarea>


        <input type="submit" class="btn btn-primary btn-block" value="Отправить"/>
    </form>


</div>
<!--Вывод меню -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
