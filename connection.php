<?php
$username="root";
$password="";
$server="localhost";
$database="malik_money_transfer";

$conn=mysqli_connect($server,$username,$password,$database);
$app_url="http://localhost/Malik%20Money%20Transfer/";
if(!$conn){
    echo "<script>alert('Connection Failed')</script>";
}

?>