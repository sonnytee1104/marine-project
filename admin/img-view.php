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
                    <h4>View Pictures
                        <a href="img-add.php" class="btn btn-primary float-end">Add Pictures</a>
                    </h4>
                </div>
                <div class="row">
            <div class="col-md-4 mb-3">
                <label for="">Category List</label>
                <?php 
                    $category = "SELECT * FROM categories WHERE status = 1";
                    $result = $conn->query($category);
                    if($result)
                    {
                        ?>
                        <select name="pic_category" class="form-control">
                            <option value="">--Select Option--</option>                                     
                            <?php
                                while ($category_result = $result->fetch_assoc())
                                {
                                    ?>
                                    <option value="<?= $category_result['id']?>"><?= $category_result['cate_name']?></option>
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
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Category</th>
                                    <th>Images</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(isset($_POST['category'])) 
                                {
                                    dd($_POST['category']);
                                    $selectedCategory = sanitize($_POST['category']);
                                
                                    $sql_pic = "SELECT * FROM pictures WHERE cate_id = $selectedCategory";
                                    $result_pic = $conn->query($sql_pic);
                                    
                                    if ($result_pic) {
                                        $counter = 1;
                                        while ($row_pic = $result_pic->fetch_assoc()) {
                                            $id = $row_pic['id'];
                                            $category_id = $row_pic['cate_id'];
                                            $img = $row_pic['img_path'];

                                            // Get the categories name
                                            $sqlstr = "SELECT cate_name FROM categories WHERE id = $category_id";
                                            $result_cate = $conn->query($sqlstr); 
                                            if(!$result_cate)
                                            {
                                                $_SESSION['message'] = "Ops! Can't not get the category";
                                                header("Location: post-view.php");
                                                exit();
                                            }
                                            $category = $result_cate->fetch_assoc()['cate_name'] ?? null;
                                            
                                            // Get images for the current animal
                                            
                                            echo '<tr>
                                                <th scope="row">'.$counter.'</th>
                                                <td>'.$category.'</td>
                                                <td><img src="../assets/pictures/'.$img.'" alt="Animal Image" style="max-width: 100px; max-height: 100px;"></td>
                                                <td>
                                                    <button class="btn btn-info"><a href="post-edit.php?id='.$id.'" class="text-light" >Edit</a></button>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="post">
                                                        <button type="submit" class="btn btn-danger" name="animal_delete" value="'.$id.'">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>';
                                    
                                            $counter++;
                                        }
                                    
                                    } 
                                } 
                                else 
                                {
                                    echo '<tr>
                                        <td colspan="8">Please choose categories to show up pictures</td>
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
