<?php
require_once "../config.php";
$pw_error = '';
if (isset($_POST['submit'])) {
    $name = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $password_confirm = sanitize($_POST['password_confirm']);
    $hashed_pass = sha1($password);

    // Check if the password and password confirmation match
    if ($password === $password_confirm) {
        $sqlstr = "INSERT INTO user(username, password, email) VALUES ('$name', '$hashed_pass', '$email')";

        $result = $conn->query($sqlstr);
        
        if ($result) {
            header('location: display.php');
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        $pw_error = "Password and confirmation do not match.";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create USERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
    <div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label class="form-label" >User Name</label>
            <input value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>" type="text" class="form-control" id="username" placeholder="Enter your username" autocomplete="off" name="username">
        </div>
        <div class="mb-3">
            <label class="form-label" >Email</label>
            <input type="email" class="form-control" id="useremail" placeholder="Enter your Email" autocomplete="off" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label" >Password</label>
            <input type="password" class="form-control" id="userpassword" placeholder="Enter your password" autocomplete="off" name="password">
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="userpassword_confirm" placeholder="Confirm your password" autocomplete="off" name="password_confirm">
        </div>
        <?php 
        if(isset($pw_error)) {
            echo '<div style="color:red">' . $pw_error . '</div>';
            } ?>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>