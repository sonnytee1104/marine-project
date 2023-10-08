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
                    <h4>Edit Category 
                        <a href="category-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                <?php 
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $sqlstr = "SELECT * FROM categories WHERE id='$id' ";
                        $result = $conn->query($sqlstr);
                        if($result->num_rows > 0)
                        {
                            $row = $result->fetch_assoc();
                            $name = $row['cate_name'];
                            $description = $row['description'];  
                      
                    ?>

                    <form action="code.php" method="post">
                        <input type="hidden" name="cate_id" value = "<?= $id ?>">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Name</label>
                                <input required value="<?= $name?>" type="text" name ="name" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" rows="4"><?= $description?></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button name="category_update" type="submit" class="btn btn-primary">Update Category</button>
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