<?php
//Подключаемся к БД
// Параметры для подключения
    $db_host = "localhost";//Хост
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_table_user = "user"; // Имя Таблицы БД
    $db_table_adver = "advertisements"; // Имя Таблицы БД

// Подключение к базе данных
    $db = mysql_connect($db_host, $db_user, $db_password) OR DIE("Не могу создать соединение ");

// Выборка базы
    mysql_select_db("tzdatabase", $db);

// Установка кодировки соединения
    mysql_query("SET NAMES 'utf8'", $db);

//$name = 'Валяя';
//    $result = mysql_query("INSERT INTO " . $db_table_user . " (user_name) VALUES ('$name')");
//    $result = mysql_query("INSERT INTO " . $db_table_adver . " (title,user_id) VALUES ('$name','4')");
//}


