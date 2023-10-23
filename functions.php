<?php
include 'config.php';

function getAllUsers(){
global $conn;
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
}


function addUser($first_name, $last_name, $email, $password){
    //use global connection variable to database created in included config.php file
    global $conn;
    $sql = "INSERT INTO users (firstName, lastname, email, userPassword)
            VALUES('$first_name', '$last_name', '$email', '$password')";

    try{
      if($result = $conn->query($sql)){
        echo "<div class='alert alert-success' role='alert'>
        Registraton successful. Please visit the <a href='welcome.php'>welcome page </a>.
      </div>";
      }
    }catch(Exception $e){
        echo "<div class='alert alert-danger mt-3' role='alert'>
        User email must be unique. Please try to register again with a different, unique email.
      </div>";
    }
}


?>