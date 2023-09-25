<?php 
require_once "../config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="createuser.php"> Add users</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
    $sqlstr = "SELECT id,username,email FROM user";
    $result = $conn->query($sqlstr);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $username = $row['username'];
            $email = $row['email'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$username.'</td>
            <td>'.$email.'</td>
            <td>
                <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
          </tr>';
        }
    }
  ?>
  
  </tbody>
</table>
    </div>
</body>
</html>