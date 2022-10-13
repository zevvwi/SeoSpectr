<?php
$adress = $_POST['adress'];
$email = $_POST['email'];
$choice1= $_POST['radio-cats1'];
$choice2 = $_POST['radio-cats2'];
$choice3 = $_POST['radio-cats3'];
$count = 0;
$file = fopen("logs.txt","a+");
$count++;
fwrite($file,"$count: \n Адрес:$adress \n E-mail:$email \n 1ый выбор:$choice1 \n 2ой выбор:$choice2 \n 3ий выбор:$choice3 \n");
fclose($file);
?>