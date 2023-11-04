<?php
require_once('config.php');
include('includes/header.php');
?>

    <div class="category">
      <div class="container">
        <ul class="cate-list">
          <li class="cate-item">
            <a href="#" class="cate-link"
              ></a
            >
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link"></a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link"></a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link"></a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link"></a>
          </li>

          <li class="cate-item">
            <a href="#" class="cate-link"></a>
          </li>
        </ul>
      </div>
    </div>

    <main>
      <article>
        <!-- Title -->
        <section class="section title category-sea-life" aria-label="title">
          <div class="container">
            <div class="main-cate-content">
              <h2 class="h2 title main-cate-title">Marine Life Encyclopedia</h2>
              <h1 class="h1 title main-cate-title">
                Cephalopods, Crustaceans & Other Shellfish
              </h1>
              <p class="main-cate-text">
                Cephalopods, crustaceans and other shellfish play important
                roles in maintaining healthy ocean systems. Cephalopods like the
                southern blue-ringed octopus and the vampire squid look
                other-worldly, while Atlantic blue crab and American lobster are
                the focus of major fishing industries.
              </p>
              <div class="main-cate-text">
                Learn fun facts about how you can help protect your favorite
                octopus, crabs and more by clicking a species below.
              </div>
            </div>
          </div>
        </section>

        <!-- detail -->

        <section class="section seli" aria-label="seli">
          <div class="container">
            <ul class="seli-list">
            <?php 
              $str_animal = "SELECT * from animals LIMIT 6";
              $result_animal = $conn->query($str_animal);

              if($result_animal)
              {
                while ($animal_row = $result_animal->fetch_assoc()) 
                {
                  $id = $animal_row['id'];
                  $location_id = $animal_row['location_id'];
                  $animal_name = $animal_row['animal_name'];
                  // Get the location name
                  $sqlstr = "SELECT places FROM location WHERE id = $location_id";
                  $result_loca = $conn->query($sqlstr); 
                  if(!$result_loca)
                  {
                      echo "<h4> There are no location available </h4>";
                  }
                  $location = $result_loca->fetch_assoc()['places'] ?? null;
                  // Get images for the current animal
                  $sql_gallery = "SELECT pictures.img_path 
                                  FROM animal_gallery 
                                  INNER JOIN pictures ON animal_gallery.picture_id = pictures.id
                                  WHERE animal_gallery.animal_id = $id LIMIT 1";
                  $result_images = $conn->query($sql_gallery);
                  $row_images = $result_images->fetch_assoc();
                  echo '
                    <li>
                    <div class="seli-card">
                      <div
                        class="card-banner img-holder"
                        style="width: 600; height: 650"
                      >
                        <a href="detail.php?id='.$id.'">
                          <img
                            src="assets/pictures/'.$row_images['img_path'].'"
                            width="600"
                            height="650"
                            loading="lazy"
                            class="img-cover"
                          />
                        </a>
                      </div>
                      <div class="card-content">
                        <h3 class="h3 title">
                          <a href="detail.php?id='.$id.'" class="card-title"> '.$animal_name.' </a>
                        </h3>
                        <address class="card-text">'.$location.'</address>
                    
                      </div>
                    </div>
                  </li>
                ';
                }
                
              }
            ?>
            </ul>
            <a href="<?= ROOT_URL ?>categories.php" class="btn btn-primary">Meet Them</a>
          </div>
        </section>
      </article>
    </main>

<?php 
    include('includes/footer.php');
    ?>