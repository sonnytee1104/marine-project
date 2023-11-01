<?php 
session_start();
include('config.php');
if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already logged In";
    header("Location: index.php");
    exit();
}
if(isset($_POST['login_btn']))
{
    $name = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);
    $hashed_pass = sha1($password);
    //bind param
    $sqlstr = "SELECT id, username, email, role_as from user WHERE username = ? and password = ? ";
    $stmt = $conn->prepare($sqlstr);
    $stmt->bind_param("ss", $name, $hashed_pass);
    $stmt->execute();
    //store value
    $resultArray = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  
    if (count($resultArray) > 0) {
        $userInfor = $resultArray[0];
        $_SESSION['user_id'] = $userInfor['id'];
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = $userInfor['role_as'];
        $_SESSION['auth_user'] = $userInfor;
        if($_SESSION['auth_role'] == 1) // 1 = admin
        {
            $_SESSION['message'] = "Welcome to admin dashboard";
            header('location: admin/index.php');
            exit(); 
        }
        else if($_SESSION['auth_role'] == 0) // 0 = user
        {
            $_SESSION['message'] = "You're logged in";
            header('location: index.php');
            exit(); 
        }
    
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password";
        header('location: login.php');
        exit();
    }
}
include('includes/header.php');

?>
    <main>
      <article>
        <section
          class="section main has-bg-image"
          aria-label="main"
          style="background-image: url('<?= ROOT_URL; ?>assets/img//assets/img/main-bg.jpg')"
        >
        <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                <?php
                include("message.php");
                ?>
                <div class="cart">
                    <div class="cart-header">
                        <h4>Login</h4>
                    </div>
                    <div class="cart-body">

                        <form action="login.php" method="post">
                            <div class="form-group-mb-3">
                                <label for="">Username</label>
                                <input name="username" type="text" placeholder="Enter Username" class="form-control">
                            </div>
                            <div class="form-group-mb-3">
                                <label for="">Password</label>
                                <input name="password" type="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group-mb-3">
                            <input class="form-control" type="checkbox" name="remember">
                            <label>Remember me!</label> 
                            </div>
                            <div class="form-group-mb-3">
                                <button name="login_btn" type="submit" class="btn btn-primary mt-2">Login Now</button>
                            </div>
                        </form>
                    </div>
                </div>
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