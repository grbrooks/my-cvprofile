<?php

$server="localhost";
$user="host";
$password="";
//$dbname="tmydb";
// Create connection
$conn=new mysqli($server,$user,$password);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
echo "connected successfully<br>";


 
 ?>