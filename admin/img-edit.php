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
                    <h4>Edit Picture
                        <a href="img-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id']))
                    {
                        $img_id = sanitize($_GET['id']);
                        
                        $sqlstr = "SELECT * FROM pictures WHERE id = $img_id";
                        $result = $conn->query($sqlstr);
                        if($result->num_rows > 0)
                        {
                            $row = $result->fetch_assoc();
                            
                            $cate_id = $row['cate_id'];
                            $img_path = $row['img_path'];
                        ?>
                        <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Category List</label>
                                <?php 
                                    $category = "SELECT * FROM categories WHERE status = 1";
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
                                <label for="">Images</label>
                                <input type="file" name ="image" class="form-control" >
                                <?php 
                                    echo '<img src="../assets/pictures/'.$img_path.'" alt="Animal Image" style="max-width: 400px; max-height: 400px;"> ';
                                ?>
                            </div>
                            <div class="col-md-12 mb-3">
                                <input type="hidden" value="<?= $img_id ?>" name="pic_id">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button name="img_edit" type="submit" class="btn btn-primary">Update Picture</button>
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