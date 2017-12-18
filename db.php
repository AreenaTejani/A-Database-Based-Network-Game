<?php
$link = mysql_connect("192.168.1.4","root","password");
if (!$link){
die('Could not connect:'.mysql_error());
}
echo 'connected sucessfull';



mysql_close($link);


?>