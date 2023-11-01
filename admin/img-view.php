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
                        <tr>
                            <td colspan="8">Please choose categories to show up pictures</td>
                        </tr>
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
