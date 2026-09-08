<?php
// local do banco de dados
define('MYSQL_HOST','localhost:3307');
// senha de usuario wsb webserver
define('MYSQL_PASSWORD', 'usbw');
// senha do BD
define('MYSQL_USER', 'root');
// nome do BD
define('MYSQL_DB_NAME','pizzaria');
// ve se da erro
try{
    $PDO = new PDO('mysql:host='. MYSQL_HOST .';dbname='. MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
}catch(PDOException $e){
    echo 'Erro ao conectar com o MySql:'. $e->getMessage();
}
?>