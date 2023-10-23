<?php 
session_start();
require_once('config.php');
include('includes/header.php');
//include('includes/navbar.php');
?>
    <main>
      <article>
        <section
          class="section main has-bg-image"
          aria-label="main"
          style="background-image: url('<?= ROOT_URL; ?>assets/img//assets/img/main-bg.jpg')"
        >
          <div class="container">
            <div class="main-content">
              <p class="main-subtitle">
                Explore the Sea Life
                <img
                  src="./assets/img/title-icon.svg"
                  width="20"
                  height="20"
                  alt="explore icon"
                  class="img"
                />
              </p>
              <h1 class="h1 title main-title">
                It's a Big World Under The Sea, Explore
              </h1>
              <p class="main-text">
                We always make our customer happy by providing as many choices
                as possible as possible
              </p>
              <div class="wrapper">
                <a href="#" class="btn btn-secondary">
                  <span class="span">Explore Now</span>

                  <ion-icon
                    name="chevron-forward"
                    aria-hidden="true"
                  ></ion-icon>
                </a>

                <button class="main-btn">
                  <div class="btn-img">
                    <img
                      src="./assets/img/main-button-img.jpg"
                      width="100"
                      height="100"
                      alt="our story"
                      class="img-cover"
                    />
                    <ion-icon name="play" aria-hidden="true"></ion-icon>
                  </div>
                  <p class="text">Watch our Story</p>
                </button>
              </div>
            </div>
            <figure class="main-banner">
              <img
                src="./assets/img/main-banner.png"
                width="631"
                height="735"
                alt=" main banner"
                class="w-100"
              />
            </figure>
          </div>
        </section>
        <!-- EVENT -->
        <section class="section event" aria-label="event">
          <div class="container">
            <div class="title-wrapper">
              <p class="section-subtitle">Upcoming Events</p>
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
                A total of 276+ species of underwater creatures are waiting for
                you to discover.
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
        <!-- SEA LIFE  -->
        <section class="section seli" aria-label="seli">
          <div class="container">
            <p class="section-subtitle">Top Sea Life</p>
            <h2 class="h2 title section-title">Explore Top Sea Life</h2>
            <ul class="seli-list">
              <li>
                <div class="seli-card">
                  <div
                    class="card-banner img-holder"
                    style="width: 600; height: 650"
                  >
                    <img
                      src="./assets/img/seli-1.jpg"
                      width="600"
                      height="650"
                      loading="lazy"
                      class="img-cover"
                    />
                  </div>
                  <div class="card-content">
                    <h3 class="h3 title">
                      <a href="#" class="card-title"> Dumbo Octopus </a>
                    </h3>
                    <address class="card-text">Deep open ocean</address>
                    <div class="card-rating">
                      <span class="span">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        4.7
                      </span>
                      <p class="rating-text">(11.1k Review)</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="seli-card">
                  <div
                    class="card-banner img-holder"
                    style="width: 600; height: 650"
                  >
                    <img
                      src="./assets/img/seli-2.jpg"
                      width="600"
                      height="650"
                      loading="lazy"
                      class="img-cover"
                    />
                  </div>
                  <div class="card-content">
                    <h3 class="h3 title">
                      <a href="#" class="card-title"> Giant Barrel Sponge </a>
                    </h3>
                    <address class="card-text">The Caribbean Sea</address>
                    <div class="card-rating">
                      <span class="span">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        4.6
                      </span>
                      <p class="rating-text">(16.8k Review)</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="seli-card">
                  <div
                    class="card-banner img-holder"
                    style="width: 600; height: 650"
                  >
                    <img
                      src="./assets/img/seli-3.jpg"
                      width="600"
                      height="650"
                      loading="lazy"
                      class="img-cover"
                    />
                  </div>
                  <div class="card-content">
                    <h3 class="h3 title">
                      <a href="#" class="card-title"> Clown Fish </a>
                    </h3>
                    <address class="card-text">
                      Southeast Asia and Australia
                    </address>
                    <div class="card-rating">
                      <span class="span">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        4.7
                      </span>
                      <p class="rating-text">(120k Review)</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="seli-card">
                  <div
                    class="card-banner img-holder"
                    style="width: 600; height: 650"
                  >
                    <img
                      src="./assets/img/seli-4.jpg"
                      width="600"
                      height="650"
                      loading="lazy"
                      class="img-cover"
                    />
                  </div>
                  <div class="card-content">
                    <h3 class="h3 title">
                      <a href="#" class="card-title"> Blue Whale </a>
                    </h3>
                    <address class="card-text">North Pacific Ocean</address>
                    <div class="card-rating">
                      <span class="span">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        4.0
                      </span>
                      <p class="rating-text">(123.4k Review)</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="seli-card">
                  <div
                    class="card-banner img-holder"
                    style="width: 600; height: 650"
                  >
                    <img
                      src="./assets/img/seli-5.jpg"
                      width="600"
                      height="650"
                      loading="lazy"
                      class="img-cover"
                    />
                  </div>
                  <div class="card-content">
                    <h3 class="h3 title">
                      <a href="#" class="card-title"> Flatback Turtle </a>
                    </h3>
                    <address class="card-text">North Australia</address>
                    <div class="card-rating">
                      <span class="span">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        4.5
                      </span>
                      <p class="rating-text">(111.1k Review)</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="seli-card">
                  <div
                    class="card-banner img-holder"
                    style="width: 600; height: 650"
                  >
                    <img
                      src="./assets/img/seli-6.jpg"
                      width="600"
                      height="650"
                      loading="lazy"
                      class="img-cover"
                    />
                  </div>
                  <div class="card-content">
                    <h3 class="h3 title">
                      <a href="#" class="card-title"> Royal Penguin </a>
                    </h3>
                    <address class="card-text">
                      Macquarie Island, Southern Ocean
                    </address>
                    <div class="card-rating">
                      <span class="span">
                        <ion-icon name="star" aria-hidden="true"></ion-icon>
                        5
                      </span>
                      <p class="rating-text">(98.03k Review)</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <a href="#" class="btn btn-primary">Meet Them</a>
          </div>
        </section>
        <!-- GALLERY -->
        <?php
          $sqlstr_gallery = "SELECT * from pictures WHERE cate_id = 99";
          
        ?>
        <section class="section gallery">
          <div class="container">
            <p class="section-subtitle">Photo Gallery</p>
            <h2 class="h2 title section-title">Photo’s From Customers</h2>
            <ul class="gallery-list">
              <li class="gallery-item">
                <figure
                  class="item-banner img-holder"
                  style="width: 700; height: 925"
                >
                  <img
                    src="./assets/img/gallery-1.jpg"
                    width="700"
                    height="925"
                    loading="lazy"
                    alt="gallery"
                    class="img-cover"
                  />
                </figure>
              </li>
              <li class="gallery-item">
                <figure
                  class="item-banner img-holder"
                  style="width: 700; height: 925"
                >
                  <img
                    src="./assets/img/gallery-2.jpg"
                    width="700"
                    height="925"
                    loading="lazy"
                    alt="gallery"
                    class="img-cover"
                  />
                </figure>
              </li>
              <li class="gallery-item">
                <figure
                  class="item-banner img-holder"
                  style="width: 700; height: 925"
                >
                  <img
                    src="./assets/img/gallery-3.jpg"
                    width="700"
                    height="925"
                    loading="lazy"
                    alt="gallery"
                    class="img-cover"
                  />
                </figure>
              </li>
              <li class="gallery-item">
                <figure
                  class="item-banner img-holder"
                  style="width: 700; height: 925"
                >
                  <img
                    src="./assets/img/gallery-4.jpg"
                    width="700"
                    height="925"
                    loading="lazy"
                    alt="gallery"
                    class="img-cover"
                  />
                </figure>
              </li>
              <li class="gallery-item">
                <figure
                  class="item-banner img-holder"
                  style="width: 700; height: 925"
                >
                  <img
                    src="./assets/img/gallery-5.jpg"
                    width="700"
                    height="925"
                    loading="lazy"
                    alt="gallery"
                    class="img-cover"
                  />
                </figure>
              </li>
              <li class="gallery-item">
                <figure
                  class="item-banner img-holder"
                  style="width: 700; height: 925"
                >
                  <img
                    src="./assets/img/gallery-6.jpg"
                    width="700"
                    height="925"
                    loading="lazy"
                    alt="gallery"
                    class="img-cover"
                  />
                </figure>
              </li>
            </ul>
          </div>
        </section>

        <!-- CTA -->
        <section class="section cta" aria-label="call to action">
          <div class="container">
            <div
              class="cta-card has-bg-image"
              style="background-image: url('./assets/img/cta-bg.jpg')"
            >
              <h2 class="h2 title section-title">
                Prepare Yourself & Let's Explore The Beauty Of The Sea Life
                <img
                  src="./assets/img/title-icon.svg"
                  width="36"
                  height="36"
                  loading="lazy"
                  alt="icon"
                  class="img"
                />
              </h2>
              <p class="section-text">
                We have many special offers especially for you.
              </p>
              <a href="#" class="btn btn-primary">Discover Now </a>
            </div>
          </div>
        </section>
      </article>
    </main>

    <?php 
    include('includes/footer.php');
    ?>