<?php 
include('authentication.php');
include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Users</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
        <?php include("message.php"); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit User
                    <a href="view-register.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php 
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $sqlstr = "SELECT id, username, email, role_as FROM user WHERE id='$id' ";
                        $result = $conn->query($sqlstr);
                        if($result->num_rows > 0)
                        {
                            $row = $result->fetch_assoc();
                            $username = $row['username'];
                            $email = $row['email'];
                            $role_as = $row['role_as'];    
                      
                        ?>

                            <form action="code.php" method="post">
                                <input type="hidden" name="userid" value="<?= $id ?>">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">User Name</label>
                                        <input type="text" name ="username" value="<?= $username?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name ="email" value="<?= $email?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Password</label>
                                        <input type="password" name ="password" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Confirm new Password</label>
                                        <input type="password" name ="cpassword" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Role as</label>
                                        <select required name="role_as" class="form-control">
                                            <option value="">--Select Role--</option>
                                            <option value="1" <?= $role_as == '1'? 'selected': '' ?> >Admin</option>
                                            <option value="0" <?= $role_as == '0'? 'selected': '' ?> >User</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button name="update_user" type="submit" class="btn btn-primary">Update User</button>
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