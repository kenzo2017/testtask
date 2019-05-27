
<?php
//Database Connection in PDO format
$dbhost = 'localhost';
$dbname = 'itsok';
$dbuser = 'root';
$dbpassword = '';

try{
    $dbcon = new PDO("mysql: host = {$dbhost};dbname={$dbname}",$dbuser, $dbpassword);
    $dbcon->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}
catch(PDOException $ex){
    die($ex->getMessage());
}
include 'login-class.php';
$login = new login($dbcon);
?>