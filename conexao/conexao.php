<?php 
define('HOST','127.0.0.1');
define('USUARIO','root');
define('SENHA','');
define('DB','banco_oficina');

$conect = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não conectado!');
?>