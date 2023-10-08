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
                    <h4>Add User/Admin 
                        <a href="view-register.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="code.php" method="post">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">User Name</label>
                                <input type="text" name ="username" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="text" name ="email" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Password</label>
                                <input type="password" name ="password" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name ="cpassword" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Role as</label>
                                <select required name="role_as" class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button name="add_user" type="submit" class="btn btn-primary">Add Admin/User</button>
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