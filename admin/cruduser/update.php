<?php 
 require_once "../config.php";
 $id=$_GET['updateid'];
 $sqlstr = "SELECT * FROM user WHERE id=$id";
 if (isset($_POST['submit'])){
    $name = sanitize($_POST['username']);  
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $hashed_pass = sha1($password); 

    $sqlstr = "UPDATE user set id='$id', username='$name', email = '$email', password = '$password' WHERE id='$id'";

    $result = $conn->query($sqlstr);
    //dd($result);
    if($result) {
        echo 'Update ok';
    } else {
        echo "Error: " . $conn->error;
    }
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD USERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
    <div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label class="form-label" >User Name</label>
            <input type="text" class="form-control" id="username" placeholder="Enter your username" autocomplete="off" name="username">
        </div>
        <div class="mb-3">
            <label class="form-label" >Email</label>
            <input type="email" class="form-control" id="useremail" placeholder="Enter your Email" autocomplete="off" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label" >Password</label>
            <input type="password" class="form-control" id="userpassword" placeholder="Enter your password" autocomplete="off" name="password">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>