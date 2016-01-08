<?php

$get = $_GET['name'];
echo $get;
$conn = new mysqli("localhost", "senester_dbs", "senester_dbs", "senester_dbs");

$result= $conn->query("INSERT INTO sellerdata (name) VALUES ('$get')");
if($result){
    
}
?>