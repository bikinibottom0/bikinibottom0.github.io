<?php
$list=array($_POST['user_name'],$_POST['user_mail'],$_POST['user_phone'],$_POST['user_message']);
$file=fopen('clients.csv','a+');
fputcsv($file, $list);
fclose($file);
echo 'Успешно\n';
echo '<a href="index.html"><br>Link Here</a>';
?>

