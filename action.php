<?php
if ($_POST['']);
$file=fopen('mes.txt','a+');
fputs($file,$_POST['mes']);
fclose($file);
echo 'Успешно';
?>