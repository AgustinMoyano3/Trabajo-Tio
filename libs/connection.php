<?php
$parametros = [];
$parametros['host']= 'localhost';
$parametros['port']= 3306;
$parametros['db']= 'torneodb';
$parametros['user']= 'root';
$parametros['password']= '';

$host = $parametros['host'];
$port = $parametros['port'];
$db = $parametros['db'];
$user = $parametros['user'];
$password = $parametros['password'];

$dsn = "mysql:host=$host:$port;dbname=$db;charset=UTF8";

try{
    $pdo = new PDO($dsn,$user,$password);
}catch(PDOException $e){
    echo $e;
}


    $sql = $sql = "SELECT * FROM `torneos`";

    $stm = $pdo->prepare($sql);

    $stm->execute();
    $torneos = $stm->fetchAll(PDO::FETCH_ASSOC);


    return $torneos;


