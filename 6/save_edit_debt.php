<? session_start(); include("check_log.php");?>
<html> <body>
<?php
 $conn=mysqli_connect("localhost", "a0657593_prop", "prop") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером

 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
mysqli_select_db($conn,"a0657593_prop") or die ("Нет такой таблицы!");
 $zapros="UPDATE debtors SET id_mate='".$_GET['d']."', debt='".iconv("cp1251", "utf-8", $_GET['debt'])."' WHERE id_deb='".$_GET['id']."'";
 mysqli_query($conn, $zapros);
 if (mysqli_affected_rows($conn)>0) {
 echo 'Все сохранено . <a href="index.php"> Вернуться к списку </a>'; }
 else { echo 'Ошибка сохранения. <a href="index.php">
Вернуться к списку </a> '; }
?>
</body> </html>
