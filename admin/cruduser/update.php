<?php 
require_once "../config.php";
$id=$_GET['updateid'];
$sqlstr = "SELECT * FROM user WHERE id=$id";
$result = $conn->query($sqlstr);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];

$pw_error = '';
if (isset($_POST['submit'])) {
    $name = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $password_confirm = sanitize($_POST['password_confirm']);
    $hashed_pass = sha1($password);

    // Check if the password and password confirmation match
    if ($password === $password_confirm) {
        $sqlstr = "UPDATE user SET username = '$name', password = '$hashed_pass', email = '$email' WHERE id = '$id'";

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
<?php 
require_once ("../header.php");
?>
    <div class="container my-5">
    <form method="post">
        <div class="mb-3">
            <label class="form-label" >User Name</label>
            <input value="<?= $username?>" type="text" class="form-control" id="username" placeholder="Enter your username" autocomplete="off" name="username">
        </div>
        <div class="mb-3">
            <label class="form-label" >Email</label>
            <input value="<?= $email?>" type="email" class="form-control" id="useremail" placeholder="Enter your Email" autocomplete="off" name="email">
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
    <script src="../sidebar-05/js/jquery.min.js"></script>
	<script src="../sidebar-05/js/boostrap.min.js"></script>
	<script src="../sidebar-05/js/main.js"></script>
	<script src="../sidebar-05//js/popper.js"></script>
</body>
</html>