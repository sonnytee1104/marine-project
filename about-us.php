<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jenkinson - Explore the sea life</title>
    <meta name="title" content="Jenkinson - Explore the sea life" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/index.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/about-us.css" />
    <link rel="preload" as="image" href="<?= ROOT_URL; ?>assets/img/main-banner.png" />
    <link rel="preload" as="image" href="<?= ROOT_URL; ?>assets/img/preloader.svg" />
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

  </head>
  <body>
    <!-- preloader -->
    <div class="preloader" data-preloader>
      <div class="preloader-inner">
        <img
          src="<?= ROOT_URL; ?>assets/img/preloader.svg"
          width="100"
          height="100"
          class="img"
        />
      </div>
    </div>
    <!-- HEADER -->
    <header class="header" data-header>
      <div class="container">
        <a href="#" class="logo">
          <img src="<?= ROOT_URL; ?>assets/img/logo.svg" width="187" height="38" alt="logo" />
        </a>

        <?php include("includes/navbar.php")?>

        <button class="nav-toggle-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>
        <div class="overlay active" data-overlay data-nav-toggler></div>
      </div>
    </header>
<section>
      <div class="about-us-bg">
        <h1>About Us</h1>
        <div class="line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class="text">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic quasi
          deleniti molestias incidunt optio, perspiciatis totam illum assumenda.
          Modi consequatur facere libero inventore cum ut soluta quisquam
          pariatur ea in?
        </p>
      </div>
      <div class="team">
        <div class="row">
          <h2>Meet Our Team</h2>
        </div>
        <div class="row">
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="./assets/img/mem1.jpg" width="130" height="130" />
              </div>
              <h3>Trịnh Ngọc Sơn</h3>
              <p>Developer</p>
              <div class="icons">
                <a href="#" class="icons-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="#" class="icons-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#" class="icons-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="#" class="icons-link">
                  <ion-icon name="logo-github"></ion-icon>
                </a>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="./assets/img/mem2.jpg" width="130" height="130" />
              </div>
              <h3>Nguyễn Phương Ngân</h3>
              <p>Developer</p>
              <div class="icons">
                <a href="#" class="icons-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="#" class="icons-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#" class="icons-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="#" class="icons-link">
                  <ion-icon name="logo-github"></ion-icon>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="about-1">
        <h2>About us</h2>
      </div>
      <div class="about-2">
        <div class="row">
            <div class="column">
              <div class="card">
                <div class="icons">
                    <a href="#" class="icons-link">
                        <ion-icon name="fish-outline"></ion-icon>
                    </a>
                </div>
                <div class="title">Mission</div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident quasi architecto dolores optio. Atque deserunt sapiente iste, quos perspiciatis, nulla, fuga tempore eligendi ea minus iusto nobis dolor neque mollitia.</p>
              </div>
            </div>
            <div class="column">
              <div class="card">
                <div class="icons">
                    <a href="#" class="icons-link">
                        <ion-icon name="eye-outline"></ion-icon>
                    </a>                
                </div>
                <div class="title">Vision</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, aspernatur quidem recusandae provident placeat, perspiciatis expedita minima alias harum accusamus sequi, temporibus ea est sapiente itaque aliquam dolore voluptatem at.</p>
              </div>
            </div>

            <div class="column">
                <div class="card">
                  <div class="icons">
                      <a href="#" class="icons-link">
                          <ion-icon name="ribbon-outline"></ion-icon>
                      </a>                
                  </div>
                  <div class="title">Achievements</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, aspernatur quidem recusandae provident placeat, perspiciatis expedita minima alias harum accusamus sequi, temporibus ea est sapiente itaque aliquam dolore voluptatem at.</p>
                </div>
              </div>
      </div>
</section>

<?php 
    include('includes/footer.php');
?>
