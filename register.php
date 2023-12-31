<?php
include 'session.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <header class="container mb-5 pt-2">
     <h1>Register Here</h1>
     
    </header>

    <div class="container">
        <div class="row">
            <p>Please use the form below to register. <strong>Please note: </strong></p>
            <ul class="ms-5">
                <li>Each user must have a unique email address. Multiple accounts for the same email address are not allowed.</li>
                <li>Your password must be at least 8 characters long</li>
            </ul>
        </div>
        <div class="row">
            <div class="col align-items-center">
                <form method="POST">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Jane Doe" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="jane.doe@gmail.com" required>
                </div>  
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" minlength="8" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" minlength="8" required>
                <div id="warning"></div>
                </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php
                   if( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
                        $first_name = explode(" ",$_POST['fullName'])[0];
                        $last_name = explode(" ",$_POST['fullName'])[1];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        addUser($first_name, $last_name, $email, $password);
                    }
                ?>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<footer class="container mt-3">
    <p>Done by: Jefferson Daley, Student ID: 20202583</p>
</footer>
<script src="script.js"></script>
</body>
</html>