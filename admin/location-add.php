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
                    <h4>Add Location 
                        <a href="location-view.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method="post">
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">Name</label>
                                <input required type="text" name ="loca_name" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button name="location_add" type="submit" class="btn btn-primary">Add Location</button>
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