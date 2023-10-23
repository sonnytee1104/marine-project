<?php 
session_start();
require_once('config.php');
include('includes/header.php');
if (isset($_POST['register'])) {
    $name = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $password_confirm = sanitize($_POST['cpassword']);
    $hashed_pass = sha1($password);

    if($name == '' || $email == '' || $password =='' || $hashed_pass =='') 
    {
        $_SESSION['message'] = 'Please fill in all the required fields.';
        header("Location: register.php");
        exit();
    }
    else
    {
        // Check if the password and password confirmation match
        if ($password === $password_confirm && $password !== '') 
        {
            // Check username exists
            $checkname = "SELECT * FROM user WHERE username = ?";
            $stmtCheck = $conn->prepare($checkname);
            $stmtCheck->bind_param("s", $name);
            $stmtCheck->execute();
            $checkname_run = $stmtCheck->get_result();

            if($checkname_run->num_rows > 0) {
                $stmtCheck->close();
                $_SESSION['message'] = 'Username already exists';
                header("Location: register.php");
                exit();
            }
            else 
            {
                $stmtCheck->close();
                $sqlstr = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sqlstr);
                $stmt->bind_param("sss", $name, $hashed_pass, $email);
                $stmt->execute();
                $result = $stmt->affected_rows;
                if ($result) {
                    $_SESSION['message'] = "Registered Successfully";
                    header('location: login.php');
                    exit();
                } 
                else 
                {
                    $_SESSION['message'] = "Error: " . $conn->error;
                    header('location: register.php');
                    exit();
                }
            }
            
        } 
        else 
        {
            $_SESSION['message'] = 'Password and Confirm Password does not match';
            header("Location: register.php");
            exit();
        }
    }   
}
?>
<main class = "d-flex align-items-center justify-content-center"> 
    <article>
        <section class = "section gallery">   
            <div class="container d-flex align-items-center justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                    <?php
                    include("message.php");
                    ?>

                        <div class="cart-header">
                            <h4>Register</h4>
                        </div>
                        <div class="cart-body">

                            <form action="" method="post">
                                <div class="form-group-mb-3">
                                    <label for="">Username</label>
                                    <input required name="username" type="text" placeholder="Enter Username" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group-mb-3">
                                    <label for="">Email</label>
                                    <input required name="email" type="email" placeholder="Enter Email" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group-mb-3">
                                    <label for="">Password</label>
                                    <input required name="password" type="password" placeholder="Enter Password" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group-mb-3">
                                    <label for="">Confirm Password</label>
                                    <input required name="cpassword" type="password" placeholder="Confirm Your Password" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group-mb-3">
                                    <button name="register" type="submit" class="btn btn-primary mb-3 mt-2">Register Now</button>
                                </div>
                            </form>
                                
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
<?php 
include('includes/footer.php');
?>