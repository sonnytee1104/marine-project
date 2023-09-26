<?php 
require_once ("../header.php");
?>
        <h2 class="mb-4">CRUD</h2>
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
            $counter = 1;
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$username = $row['username'];
				$email = $row['email'];
				echo '<tr>
				<th scope="row">'.$counter.'</th>
				<td>'.$username.'</td>
				<td>'.$email.'</td>
				<td>
					<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >Update</a></button>
					<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
				</td>
			  </tr>';
              $counter++;
			}
		}
	  ?>
	  
	  </tbody>
	</table>
		</div>
      </div>

	<script src="../sidebar-05/js/jquery.min.js"></script>
	<script src="../sidebar-05//js/popper.js"></script>
	<script src="../sidebar-05/js/popper.js"></script>
	<script src="../sidebar-05/js/main.js"></script>
  </body>
</html>