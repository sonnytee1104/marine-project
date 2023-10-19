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

                    <form action="code.php" method="post" enctype="multipart/form-data">
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Category List</label>
                                <?php 
                                    $category = "SELECT * FROM categories";
                                    $result = $conn->query($category);
                                    if($result)
                                    {
                                        ?>
                                        <select name="category" class="form-control">
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
                                                    <option value="<?= $row['id']?>"><?= $row['places']?></option>
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
                                <input required type="text" name ="aname" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Images</label>
                                <input type="file" name ="images[]" class="form-control" multiple >
                            </div>
                            <div class="col-md-12 mb-3">
                                <button name="post_add" type="submit" class="btn btn-primary">Add Post</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>  
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>