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

            <?php include('message.php') ?>
            
            <div class="card">
                <div class="card-header">
                    <h4>Registered User
                        <a href="register-add.php" class="btn btn-primary float-end">Add Admin/User</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myDataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sqlstr = "SELECT * FROM user";
                            $result = $conn->query($sqlstr);
                            if ($result) 
                            {
                                $counter = 1;
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    if($row['role_as'] == 1)
                                    {
                                        $role_as = "Admin";
                                    }
                                    elseif($row['role_as'] == 0)
                                    {
                                        $role_as = "User";
                                    }
                                    echo '<tr>
                                    <th scope="row">'.$counter.'</th>
                                    <td>'.$username.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$role_as.'</td>
                                    <td>
                                        <button class="btn btn-primary"><a href="register-edit.php?id='.$id.'" class="text-light" >Edit</a></button>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post" name="deleteForm">
                                        <button type="submit" class="btn btn-danger btn-delete" name="user_delete" value="'.$id.'">Delete</button>
                                        </form>
                                    </td>
                                    </tr>';
                                    $counter++;
                                }
                            }
                            else
                            {
                                ?>
                                    <tr>
                                        <td colspan="6">No record Found</td>
                                    </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>