<?php
header("Content-Type:text/html;charset=utf-8");

include "../setings/index1.php";

?>
<html>
<head>
    <title>Каталог</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h4><a href='../index.php'>Назад</a><br></h4>
<table border="1" width="40%" align="center">
    <tr>
        <th>id</th>
        <th>Пользователь</th>
    </tr>
    <!-- Устанавливаем соединение с базой данных-->
    <?php
    include "../setings/tablicha.php";
    ?>

</table>
<div align="center">
    <ul class="pagination" >
        <?php echo $paginate1; ?>
    </ul>
</div>

</div>
<!--Вывод меню -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>