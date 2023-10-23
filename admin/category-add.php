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
                    <h4>Add Category 
                        <a href="category-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method="post">
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Name</label>
                                <input required type="text" name ="name" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button name="category_add" type="submit" class="btn btn-primary">Save Category</button>
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