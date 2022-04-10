<?php
//1
if (isset($_POST["firstButton"])) {
print("Исходная строка:<br /> ".$_POST['text1']."<br><br>" );
$str1=explode(" ",$_POST['text1']);
print("Преобразованная строка:<br /> ");
foreach (array_reverse($str1) as $row) {
    echo $row . " ";
}
}
//2
if (isset($_POST["secondButton"])) {
echo "Исходный текст: ".$_POST["text2"]."<br>";
echo "Кол-во символов: ".mb_strlen( str_replace(" ", '',$_POST["text2"]), 'UTF-8');
echo ("<br>Процент прописных: ".(mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/u', '', $_POST["text2"]), 'UTF-8'))/(mb_strlen( str_replace(" ", '',$_POST["text2"]), 'UTF-8'))*100.);
echo ("<br>Процент строчных: ".mb_strlen( preg_replace('/[^a-zа-яё]/u', '', $_POST["text2"]), 'UTF-8')/mb_strlen( str_replace(" ", '',$_POST["text2"]), 'UTF-8')*100);
}
//3
if (isset($_POST["thirdButton"])) {
    $d=stristr($_POST["text3"], '@');
    echo $d;
    if(($d) === FALSE) {
    echo 'В электронном адресе не встречается символ "@", введите электронный адрес заново';
  }else{
    echo 'Вcё верно';
  }
}
?>