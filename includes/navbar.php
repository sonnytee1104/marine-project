<nav class="navbar" data-navbar="">
<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
          <div class="navbar-top">
            <a href="#" class="logo">
              <img
                src="<?= ROOT_URL; ?>assets/img/logo.svg"
                width="187"
                height="38"
                alt="logo"
              />
            </a>

            <button
              class="nav-togle-btn"
              aria-label="close menu"
              data-nav-toggler
            >
              <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="<?=ROOT_URL?>" class="navbar-link <?= $page == 'index.php' ? 'active' : '' ?>">Home</a>
            </li>

            <li class="navbar-item">
              <a href="<?= ROOT_URL?>about-us.php" class="navbar-link <?= $page == 'about-us.php' ? 'active' : '' ?> ">About</a>
            </li>

            <li class="navbar-item">
              <a href="<?= ROOT_URL?>categories.php" class="navbar-link <?= $page == 'categories.php' ? 'active' : '' ?>">Sea Life</a>
            </li>

            <li class="navbar-item">
              <a href="<?= ROOT_URL?>contact-us.php" class="navbar-link <?= $page == 'contact-us.php' ? 'active' : '' ?>">Contact</a>
            </li>
          </ul>

          <div class="header-action">
            <?php 
            if(!isset($_SESSION['auth']))
            {
              ?>
              <a href="<?= ROOT_URL?>login.php" class="login-btn">Login</a>

              <a href="<?= ROOT_URL?>register.php" class="btn btn-primary">Sign Up</a>
              <?php
            }
            else
            {
              ?>
               <h4>Hello! <?= $_SESSION['auth_user']['username'] ?></h4>
               <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="register-edit.php?id=<?= $_SESSION['user_id']?>">Settings</a></li>
                          <li><hr class="dropdown-divider" /></li>
                          <li><a class="dropdown-item" href="../marine-project/logout.php">Logout</a></li>
                      </ul>
                  </li>
              </ul>
              <?php
            }
            ?>             
          </div>
        </nav>
