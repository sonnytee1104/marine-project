<?php 
include('authentication.php');
include('includes/header.php');

?>

<div class="container-fluid px-4">
    
    <div class="row mt-4">
        <div class="col-md-12">
        <?php include("message.php"); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Post 
                        <a href="post-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
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
                            ?>
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <input type="text" name = "post_id" value="<?= $animal_id ?>">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="">Category List</label>
                                        <?php 
                                            $category = "SELECT * FROM categories";
                                            $result = $conn->query($category);
                                            if($result)
                                            {
                                                ?>
                                                <select name="category" required class="form-control">
                                                    <option value="">--Select Option--</option>                                         
                                                    <?php
                                                        while ($category_result = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <option value="<?= $category_result['id']?>" <?= $category_result['id'] == $cate_id ? 'selected':'' ?>>
                                                                <?= $category_result['cate_name']?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                        </select>
                                                        <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <h5>No Category Available</h5>
                                                <?php
                                            }
                                        ?>

                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="">Location</label>
                                        <?php 
                                            $location = "SELECT * FROM location";
                                            $result = $conn->query($location);
                                            if($result)
                                            {
                                                ?>
                                                <select name="location" class="form-control">
                                                    <option value="">--Select Option--</option>                                     
                                                    <?php
                                                        while ($row = $result->fetch_assoc())
                                                        {
                                                            ?>
                                                            <option value="<?= $row['id']?>" <?= $row['id'] == $loca_id ? 'selected':'' ?>>
                                                                <?= $row['places']?>
                                                            </option>
                                                            <?php
                                                        }
                                                        ?>
                                                        </select>
                                                        <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <h5>No Location Available</h5>
                                                <?php
                                            }
                                        ?>

                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="">Animal's Name</label>
                                        <input required type="text" name ="aname" class="form-control" value="<?= $name ?>"> 
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" rows="4"> <?= $animal_des ?> </textarea>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Images</label>
                                        <input type="file" name ="images[]" class="form-control" multiple >
                                        <?php 
                                            $sql_gallery = "SELECT pictures.img_path 
                                            FROM animal_gallery 
                                            INNER JOIN pictures ON animal_gallery.picture_id = pictures.id
                                            WHERE animal_gallery.animal_id = $animal_id";
                                            $result_images = $conn->query($sql_gallery);
                                            if ($result_images && $result_images->num_rows > 0) 
                                            {
                                                while ($row_images = $result_images->fetch_assoc()) 
                                                {
                                                    echo '<img src="../assets/pictures/'.$row_images['img_path'].'" alt="Animal Image" style="max-width: 100px; max-height: 100px;"> ';
                                                }
                                            }
                                        ?>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button name="post_edit" type="submit" class="btn btn-primary">Save Post</button>
                                    </div>
                                </div>

                            </form>
                            <?php
                        }
                        else
                        {
                            ?>
                            <h4>No Record Found</h4>
                            <?php
                        }
                    }
                      
                    ?>
                </div>
            </div>
        </div>
    </div>  
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>