<?php
include 'config.php';

function getAllUsers(){
global $conn;
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
}


function addUser($first_name, $last_name, $email, $password){
    global $conn;
    $sql = "INSERT INTO users (firstName, lastname, email, userPassword)
            VALUES('$first_name', '$last_name', '$email', '$password')";
    $result = $conn->query($sql);

    if($result){
        echo "<div class='alert alert-success' role='alert'>
        A simple success alert—check it out!
      </div>";
    }else{
        echo "<div class='alert alert-danger' role='alert'>
        A simple danger alert—check it out!
      </div>";
    }
}


?>