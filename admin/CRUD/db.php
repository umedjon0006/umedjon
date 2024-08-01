<?php
$host = "localhost";
$username = "root";
$password ='';
$dbname= "restaurant";
$conn = new mysqli($host,$username,$password,$dbname);
if($conn->connect_error){
    die("Ошибка подключуния к БД: ".$conn->connect_error);
}
?>