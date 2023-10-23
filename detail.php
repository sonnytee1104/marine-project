<?php
require_once('config.php');
include('includes/header.php');
?>
    <!-- List -->
    <!-- <div class="category mt-5px">
      <div class="container">
        <ul class="cate-list">
          <li class="cate-item">
            <a href="#" class="cate-link"
              >Cephalopod, Crustaceans & Other Shellfish</a
            >
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link">Coral & Other Invertebrates</a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link">Marine Mammals</a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link">Ocean Fishes</a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link">Sea turtle & Reptiles</a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link">Sharks and Rays</a>
          </li>
        </ul>
      </div>
    </div> -->

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
                    $sqlstr = "SELECT cate_name FROM categories WHERE id = $category_id";
                    $result_cate = $conn->query($sqlstr); 
                    if(!$result_cate)
                    {
                        echo "<h4> There are no location available </h4>";    
                    }
                    $category = $result_cate->fetch_assoc()['cate_name'] ?? null;
                    dd($category);

                    // Get the location name
                    $sqlstr = "SELECT places FROM location WHERE id = $location_id";
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
                  <!-- <div class=" habitat">
                    <div class="title">
                        <ion-icon name="fish"></ion-icon>
                        <p>Habitat</p>
                    </div>
                    <div class="content">Rocky shores</div>
                  </div>
                  <div class=" FeedingHabits">
                    <div class="title">
                        <ion-icon name="pulse"></ion-icon>
                        <p>Feeding Habits</p>
                    </div>
                    <div class="content">Filter feeder</div>
                  </div> -->
                </div>
              </div>
              <div class="img-infor-ani">
                <div class="carousel">
                    <div class="main">
                        <img class="img-feature" src="./assets/pictures/cfish1.jpg">
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
                    </div>
                </div>
              </div>
            </div>
          <!-- </section>
            <section class="section seli" aria-label="seli">
                <div class="container">
                  <div class="seli-list">
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
      
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                    
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
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                    
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
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                    
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
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                    
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
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                    
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
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-7.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-8.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-9.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-10.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-11.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-12.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-13.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-14.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-15.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-16.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-17.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-18.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-19.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    </li>
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-20.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-21.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-22.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
      
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-23.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                      <div class="seli-card">
                        <div
                          class="card-banner img-holder"
                          style="width: 600; height: 650"
                        >
                          <img
                            src="./assets/img/seli-24.jpg"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                          <span class="card-name">Acorn Barnacle</span>
                        </div>
                      </div>
                    
                  </div> 
                  <div class="pagination"></div>
                </div>
          </section> -->
        </div>
      </article>
    </main>
     <?php 
    include('includes/footer.php');
    ?>