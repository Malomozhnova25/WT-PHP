<? session_start(); include("check_log.php");?>
<html> <body>
<?php
 $conn=mysqli_connect("localhost", "a0657593_prop", "prop") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером

 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
mysqli_select_db($conn,"a0657593_prop") or die ("Нет такой таблицы!");
 $zapros="UPDATE housemates SET fullname='".iconv("utf-8", "cp1251", $_GET['fullname']).
"', birthdate='".$_GET['birthdate']."', id_house='".$_GET['z']."' WHERE id_mate='".$_GET['id']."'";
 mysqli_query($conn, $zapros);
 if (mysqli_affected_rows($conn)>0) {
 echo 'Все сохранено . <a href="index.php"> Вернуться к списку </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку </a> '; }
?>
</body> </html>
