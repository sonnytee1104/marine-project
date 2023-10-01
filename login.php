<?php 
require_once "config.php"; 
if (isset($_POST['login'])) {
  dd($_POST['login']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./pages/css/style.css">
    <title>Login and Registration</title>
  </head>
  <body>
    <div class="wrapper">
      <nav class="nav">
        <div class="nav-logo">
          <img src="./assets/images/Logo.png" alt="" />
        </div>
        <div class="nav-menu" id="navMenu">
          <ul>
            <li><a href="#" class="link active">Home</a></li>
            <li><a href="#" class="link">Blog</a></li>
            <li><a href="#" class="link">Services</a></li>
            <li><a href="#" class="link">About</a></li>
          </ul>
        </div>
        <div class="nav-button">
          <button class="btn white-btn" id="loginBtn" onclick="login()">
            Sign In
          </button>
          <button class="btn" id="registerBtn" onclick="register()">
            Sign Up
          </button>
        </div>
        <div class="nav-menu-btn">
          <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
      </nav>
      <!------------------------------- From box ------------------------------->
      <form name="login_form" action="post">
      <div class="form-box">
        <!------------------ login form ------------------>
        <div class="login-container" id="login">
          <div class="top">
            <span
              >Don't have an account?
              <a href="#" onclick="register()">Sign Up</a></span
            >
            <header>Login</header>
          </div>
          <div class="input-box">
            <input
              type="text"
              class="input-field"
              placeholder="Username or Email"
            />
            <i class="bx bx-user"></i>
          </div>
          <div class="input-box">
            <input type="pasword" class="input-field" placeholder="Password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
            <input name="login" type="submit" class="submit" value="Sign In" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="register-check" />
              <label for="register-check">Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Forgot password?</a></label>
            </div>
          </div>
        </div>
        </form>
        <!------------------ registration form ------------------>
        <form name="register_form" action="post">
        <div class="register-container" id="register">
          <div class="top">
            <span
              >Have an account? <a href="#" onclick="login()">Login</a></span
            >
            <header>Sign Up</header>
          </div>
          <div class="two-forms">
            <div class="input-box">
              <input type="text" class="input-field" placeholder="Firstname" />
              <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
              <input type="text" class="input-field" placeholder="Lastname" />
              <i class="bx bx-user"></i>
            </div>
          </div>
          <div class="input-box">
            <input type="text" class="input-field" placeholder="Email" />
            <i class="bx bx-envelope"></i>
          </div>
          <div class="input-box">
            <input type="pasword" class="input-field" placeholder="Password" />
            <i class="bx bx-lock-alt"></i>
          </div>
          <div class="input-box">
            <input type="submit" class="submit" value="Register" />
          </div>
          <div class="two-col">
            <div class="one">
              <input type="checkbox" id="register-check" />
              <label for="register-check">Remember Me</label>
            </div>
            <div class="two">
              <label><a href="#">Terms and Conditions</a></label>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    <script>
      function myMenuFunction() {
        var i = document.getElementById("navMenu");

        if (i.className === "nav-menu") {
          i.className += " responsive";
        } else {
          i.className = "nav-menu";
        }
      }
    </script>

    <script>
      var a = document.getElementById("loginBtn");
      var b = document.getElementById("registerBtn");
      var c = document.getElementById("login");
      var d = document.getElementById("register");

      function login() {
        c.style.left = "4px";
        d.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        c.style.opacity = "1";
        d.style.opacity = "0";
      }

      function register() {
        c.style.left = "-510px";
        d.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        c.style.opacity = "0";
        d.style.opacity = "1";
      }
    </script>
  </body>
</html>
