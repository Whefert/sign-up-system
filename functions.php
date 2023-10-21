<?php
include 'config.php';

function getAllUsers(){
global $conn;
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
}
?>