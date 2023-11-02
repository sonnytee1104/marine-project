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
                    <h4>View Location 
                        <a href="location-add.php" class="btn btn-primary float-end">Add Location</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Location</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $sqlstr = "SELECT * FROM location";
                            $result = $conn->query($sqlstr);
                            if ($result) 
                            {
                                $counter = 1;
                                while ($row = $result->fetch_assoc()) 
                                {
                                    $id = $row['id'];
                                    $name = $row['places'];
                                    echo '<tr>
                                    <th scope="row">'.$counter.'</th>
                                    <td>'.$name.'</td>
                                    <td>
                                        <button class="btn btn-info"><a name="loca_id" href="location-edit.php?id='.$id.'" class="text-light" >Edit</a></button>
                                    </td>
                                    <td>
                                        <form name="deleteForm" action="code.php" method="post">
                                        <button type="submit" class="btn btn-danger btn-delete" name="location_delete" value="'.$id.'">Delete</button>
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
                                        <td colspan="4">No Record Found</td>
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
</div>

<?php 
include('includes/footer.php');
include('includes/scripts.php');
?>