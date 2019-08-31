<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$user = 'sample-username';
$pass = 'sapassword';
$host = 'mysql';
$db = 'testDB';

try {
    $dbh = new PDO('mysql:host=' . $host, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$dbh->exec("CREATE DATABASE `$db`") 
or die(print_r($dbh->errorInfo(), true));

echo 'Show Databases<br>';

$rs = $dbh->query("SHOW DATABASES");
while ($h = $rs->fetch(PDO::FETCH_NUM)) {
   echo $r[0]."<br>";
}
?>