<?php 

require_once 'crud.php';

$host = 'localhost';
$name = 'build-progress';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$name";

try {

    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo 'There was an error while connecting to the database: ' . $e->getMessage();

}

$crud = new crud($pdo);

?>