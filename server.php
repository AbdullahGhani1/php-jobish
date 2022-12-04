<?php
$server = 'localhost';
$user_name='root';
$pass="";
$data="php";
$conn =mysqli_connect($server,$user,$pass,$data);
if(!$conn){
    echo "Database not connected";
}
else{
    echo "Connected";
}
?>