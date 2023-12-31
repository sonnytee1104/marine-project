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

    <link rel="preload" as="image" href="<?= ROOT_URL; ?>assets/img/main-banner.png" />
    <link rel="preload" as="image" href="<?= ROOT_URL; ?>assets/img/preloader.svg" />
    <link rel="stylesheet" href="<?=ROOT_URL; ?>assets/css/event.css" />
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
<section class="section event" aria-label="event" id="section_1">
      <div class="container">
        <div class="title-wrapper">
          <h2 class="h2 title section-title">Top Values For You</h2>
          <p class="section-text">
            Try a variety of benefits when using our services.
          </p>
        </div>
        <div class="event-card">
          <div class="card-icon">
            <img
              src="./assets/img/event-icon-1.svg"
              width="60"
              height="60"
              loading="lazy"
              alt="icon"
            />
          </div>
          <h3 class="h3 title card-title">Lot Of Choices</h3>
          <p class="card-text">
            A total of 276+ species of underwater creatures are waiting for you
            to discover.
          </p>
        </div>
        <div class="event-card">
          <div class="card-icon">
            <img
              src="./assets/img/event-icon-2.svg"
              width="60"
              height="60"
              loading="lazy"
              alt="icon"
            />
          </div>
          <h3 class="h3 title card-title">Best Events</h3>
          <p class="card-text">
            Discover strange creatures at Jenkinson Sea Life.
          </p>
        </div>
        <div class="event-card">
          <div class="card-icon">
            <img
              src="./assets/img/event-icon-3.svg"
              width="60"
              height="60"
              loading="lazy"
              alt="icon"
            />
          </div>
          <h3 class="h3 title card-title">Cheap Ticket</h3>
          <p class="card-text">
            With an easy and fast ticket purchase process.
          </p>
        </div>
      </div>
</section>
<section class="schedule section-padding" id="section_2">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12">
            <h2 class="mb-5 text-center section-title">All Events</h2>
            <nav>
              <div
                class="nav nav-tabs align-items-baseline"
                id="nav-tab"
                role="tablist"
              >
                <button
                  class="nav-link active"
                  id="nav-Children-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#nav-Children"
                  type="button"
                  role="tab"
                  aria-controls="nav-Children"
                  aria-selected="true"
                >
                  <h3>
                    <span>Children</span>
                  </h3>
                </button>

                <button
                  class="nav-link"
                  id="nav-Adults-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#nav-Adults"
                  type="button"
                  role="tab"
                  aria-controls="nav-Adults"
                  aria-selected="false"
                >
                  <h3>
                    <span>Adults</span>
                  </h3>
                </button>
              </div>
            </nav>
            <div class="tab-content mt-5" id="nav-tabContent">
              <div
                class="tab-pane fade show active"
                id="nav-Children"
                role="tabpanel"
                aria-labelledby="nav-Children-tab"
              >
                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-1.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                    <h4 class="mb-2">Event 1</h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Impedit quas officiis eveniet magnam ut inventore.
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        9:00 AM - 5:00 PM, Thursday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-2.jpg"
                      class="event-image img-fluid"
                    />
                  </div>

                  <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                    <h4 class="mb-2">Event 2</h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Impedit quas officiis eveniet magnam ut inventore.
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        2:00 PM - 7:00 PM, Saturday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-3.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg col-12 mt3 mt-lg-0">
                    <h4 class="mb-2">Event 3</h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Laudantium, beatae! Labore dolor obcaecati nulla aut.
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        7:00 AM - 12:00 AM, Monday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-4.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg col-12 mt3 mt-lg-0">
                    <h4 class="mb-2">Event 4</h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Laudantium, beatae! Labore dolor obcaecati nulla aut.
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        9:00 AM - 12:00 AM, Friday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-5.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg col-12 mt3 mt-lg-0">
                    <h4 class="mb-2">Event 5</h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Laudantium, beatae! Labore dolor obcaecati nulla aut.
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        9:00 AM - 10:00 AM, Tuesday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="nav-Adults"
                role="tabpanel"
                aria-labelledby="nav-Adults-tab"
              >
                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-6.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                    <h4 class="mb-2">Event 1</h4>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Praesentium, iure minus. Suscipit, cumque. Veniam,
                      numquam?
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        2:00 PM - 10:00 PM, Sunday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-7.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                    <h4 class="mb-2">Event 2</h4>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Praesentium, iure minus. Suscipit, cumque. Veniam,
                      numquam?
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        5:00 AM - 5:00 PM, Thursday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-8.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                    <h4 class="mb-2">Event 3</h4>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Praesentium, iure minus. Suscipit, cumque. Veniam,
                      numquam?
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        7:00 AM - 9:00 PM, Saturday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row border-bottom pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-9.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                    <h4 class="mb-2">Event 4</h4>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Praesentium, iure minus. Suscipit, cumque. Veniam,
                      numquam?
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        2:00 PM - 7:00 PM, Monday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row pb-5 mb-5">
                  <div class="col-lg-4 col-12">
                    <img
                      src="./assets/img/event-10.jpg"
                      class="event-image img-fluid"
                    />
                  </div>
                  <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                    <h4 class="mb-2">Event 5</h4>
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Praesentium, iure minus. Suscipit, cumque. Veniam,
                      numquam?
                    </p>
                    <div class="d-flex align-items-center mt-4">
                      <span class="mx-3 mx-lg-5">
                        <ion-icon name="today-outline" class="time"></ion-icon>
                        9:00 AM - 10:00 PM, Sunday
                      </span>
                      <span class="mx-1 mx-lg-5">
                        <ion-icon
                          name="location-outline"
                          class="location"
                        ></ion-icon>
                        Jenkinson Sea Life
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
    
<?php 
    include('includes/footer.php');
?>

