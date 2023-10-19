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
                    <h4>View Animals and Pictures
                        <a href="post-add.php" class="btn btn-primary float-end">Add Post</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Animal Name</th>
                                    <th>Description</th>
                                    <th>Images</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sql_animals = "SELECT id, category, location_id, animal_name, description FROM animals";
                                $result_animals = $conn->query($sql_animals);
                                
                                if ($result_animals) {
                                    $counter = 1;
                                    while ($row_animals = $result_animals->fetch_assoc()) {
                                        $id = $row_animals['id'];
                                        $category_id = $row_animals['category'];
                                        $location_id = $row_animals['location_id'];
                                        $animal_name = $row_animals['animal_name'];
                                        $description = $row_animals['description'];

                                        // Get the categories name
                                        $sqlstr = "SELECT cate_name FROM categories WHERE id = $category_id";
                                        $result_cate = $conn->query($sqlstr); 
                                        if(!$result_cate)
                                        {
                                            $_SESSION['message'] = "Ops! Can't not get the pictures";
                                            header("Location: post-view.php");
                                            exit();
                                        }
                                        $category = $result_cate->fetch_assoc()['cate_name'] ?? null;

                                        // Get the location name
                                        $sqlstr = "SELECT places FROM location WHERE id = $location_id";
                                        $result_loca = $conn->query($sqlstr); 
                                        if(!$result_loca)
                                        {
                                            $_SESSION['message'] = "Ops! Can't not get the location";
                                            header("Location: post-view.php");
                                            exit();
                                        }
                                        $location = $result_loca->fetch_assoc()['places'] ?? null;
                                        
                                        // Get images for the current animal
                                        $sql_images = "SELECT img_path FROM pictures WHERE cate_id = $category_id";
                                        $result_images = $conn->query($sql_images);
                                        
                                        echo '<tr>
                                            <th scope="row">'.$counter.'</th>
                                            <td>'.$category.'</td>
                                            <td>'.$location.'</td>
                                            <td>'.$animal_name.'</td>
                                            <td>'.$description.'</td>
                                            <td>';
                                
                                        if ($result_images) {
                                            while ($row_images = $result_images->fetch_assoc()) {
                                                echo '<img src="../assets/pictures/'.$row_images['img_path'].'" alt="Animal Image" style="max-width: 100px; max-height: 100px;"> ';
                                            }
                                        }
                                
                                        echo '</td>
                                            <td>
                                                <button class="btn btn-info"><a href="animal-edit.php?id='.$id.'" class="text-light" >Edit</a></button>
                                            </td>
                                            <td>
                                                <form action="code.php" method="post">
                                                    <button type="submit" class="btn btn-danger" name="animal_delete" value="'.$id.'">Delete</button>
                                                </form>
                                            </td>
                                        </tr>';
                                
                                        $counter++;
                                    }
                                } else {
                                    echo '<tr>
                                        <td colspan="8">No Record Found</td>
                                    </tr>';
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>
