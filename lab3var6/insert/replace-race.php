<?php
header('Content-Type: text/xml');
header("Cache-Control: no-cache, must-revalidate");

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $data = $_GET;
    
    $sth = $dbh->prepare("UPDATE cars SET Race = ? WHERE Name = ?;");
    $sth->execute(array($data['race'], $data['car_name']));
    echo '<?xml version="1.0" encoding="utf8" ?>';
	echo "<root>";
    echo '<info>'. "Информация о пробеге успешна изменена!" .'</info>';
	echo "</root>";
} catch (PDOException $e) {
    echo "Ошибка";
}