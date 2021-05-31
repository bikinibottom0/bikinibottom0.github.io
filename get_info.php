<?php
$list=array($_POST['user_name'],$_POST['user_mail'],$_POST['user_phone'],$_POST['user_message']);
$file=fopen('clients.csv','a+');
fputcsv($file, $list);
fclose($file);
echo 'Ваши данные записаны.<br>Скоро мы с вами свяжемся!';
echo '<a href="index.html"><br>Вернуться на главную страницу</a>';
?>

