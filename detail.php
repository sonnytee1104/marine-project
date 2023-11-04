<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="detail.css" />
  </head>
  <body>
    <!-- HEADER -->
    <header class="header " data-header>
      <div class="container">
        <a href="#" class="logo">
          <img src="./assets/img/logo.svg" width="187" height="38" alt="logo" />
        </a>
        <nav class="navbar" data-navbar="">
<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1); ?>
          <div class="navbar-top">
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


    </header>
    <!-- List -->
    <div class="category">
      <div class="container">
      </div>
    </div>

    <!-- Title -->
    <main>
      <article>
        <div class="detail-animals">
          <section class="section title category-sea-life" aria-label="title">
            <div class="container">
              <div class="main-cate-content">
                <h2 class="h2 title main-cate-title">
                  Marine Life Encyclopedia
                </h2>
                <?php 
                if(isset($_GET['id']))
                {   
                    $animal_id = sanitize($_GET['id']);
                    $sqlstr = "SELECT * FROM animals WHERE id='$animal_id' ";
                    $result = $conn->query($sqlstr);
                    if($result->num_rows > 0)
                    {
                        $row = $result->fetch_assoc();
                        $name = $row['animal_name'];
                        $cate_id = $row['category'];
                        $loca_id = $row['location_id'];
                        $animal_des = $row['description'];
                    // Get the categories name
                    $sqlstr = "SELECT cate_name FROM categories WHERE id = $cate_id";
                    $result_cate = $conn->query($sqlstr); 
                    if(!$result_cate)
                    {
                        echo "<h4> There are no location available </h4>";    
                    }
                    $category = $result_cate->fetch_assoc()['cate_name'] ?? null;
                    // Get the location name
                    $sqlstr = "SELECT places FROM location WHERE id = $loca_id";
                    $result_loca = $conn->query($sqlstr); 
                    if(!$result_loca)
                    {
                        echo "<h4> There are no location available </h4>";                        
                    }
                    $location = $result_loca->fetch_assoc()['places'] ?? null;     
                    }
                };
                ?>
                <h1 class="h1 title main-cate-title">
                    <?= $category ?>
                </h1>
                <p class="main-cate-name"><?= $name ?></p>
              </div>
            </div>
          </section>
          <section class="infor-ani">
            <div class="container">
              <div class="text-infor-ani">
                <h2 class="h2 title infor-title">About</h2>
                <p class="content">
                    <?= $animal_des ?>
                </p>
                <div class="detail">
                <div class="distribution">
                    <div class="title">
                        <ion-icon name="earth"></ion-icon>
                        <p>Location</p>
                    </div>
                    <div class="content">
                      <?= $location ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="img-infor-ani">
                <div class="carousel">
                    <div class="main">
                        <?php 
                            $sql_gallery = "SELECT pictures.img_path 
                            FROM animal_gallery 
                            INNER JOIN pictures ON animal_gallery.picture_id = pictures.id
                            WHERE animal_gallery.animal_id = $animal_id";
                            $result_images = $conn->query($sql_gallery);

                            if ($result_images && $result_images->num_rows > 0) 
                            {
                                $row_images = $result_images->fetch_assoc();
                                echo '<img class="img-feature" src="assets/pictures/'.$row_images['img_path'].'"';
                                echo '<div class="list-image">
                                    </div>
                                    <div class="list-image">';
                            while ($row_images = $result_images->fetch_assoc()) 
                            {
                                echo  '<div><img src="assets/pictures/'.$row_images['img_path'].'" alt=""></div>';
                            }
                            echo '</div>';
                            }
                        ?>
                        <!-- <img class="img-feature" src="./assets/pictures/cfish1.jpg">
                        </img>
                        <div class="control prev"><ion-icon name="chevron-back"></ion-icon></div>
                        <div class="control next"><ion-icon name="chevron-forward"></ion-icon></div>
                    </div>
                    <div class="list-image">
                        <div><img src="./assets/pictures/cfish1.jpg" alt=""></div>
                        <div><img src="./assets/pictures/cfish2.jpg" alt=""></div>
                        <div><img src="./assets/pictures/cfish3.jpg" alt=""></div>
                        <div><img src="./assets/pictures/cfish4.jpg" alt=""></div>
                        <div><img src="./assets/pictures/cfish5.jpg" alt=""></div>
                    </div> -->
                </div>
              </div>
            </div>
          </section>

        </div>
      </article>
    </main>
<?php 
include('includes/footer.php');
?>