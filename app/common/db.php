<?php
// $serverName = "localhost:3306";
// $username="root";
// $password="";
// $database="quanlisinhvien";
// try{
//     $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e){
//     echo "Connection failed". $e->getMessage();
// }
$servername = '127.0.0.1:3306';
$username = 'root';
$password = 'Vinhanh-11';
$dbname = 'my_database';
$conn = new mysqli($servername,$username,$password,$dbname);
?>