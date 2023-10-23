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
                                $sql_pic = "SELECT * FROM pictures";
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
