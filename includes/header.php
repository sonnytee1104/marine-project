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
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/glide.core.min.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/glide.theme.min.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/index.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/contact.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/event.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/about-us.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/ani-loca.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/categories.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/details.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/login.css" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/register.css" />
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

        <?php include("navbar.php")?>

        <button class="nav-toggle-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>
        <div class="overlay active" data-overlay data-nav-toggler></div>
      </div>
    </header>