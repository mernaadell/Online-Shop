<?php

$dsn='mysql:host=localhost;dbname=shop';
$user='root';
$pass='';
$options =array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
);
try{
    $con=new PDO ($dsn ,$user,$pass,$options);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "you are connected";
}
catch (PDOException $e)
{
    echo 'faildd'." ".$e->getMessage();
}


?>