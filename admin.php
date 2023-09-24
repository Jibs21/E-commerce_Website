

<?php
 	include 'connect.php';
	
	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		$query = "SELECT * FROM `register` WHERE CONCAT(`id`, `username`, `password`, `email`) LIKE '%".$valueToSearch."%'";
		$search_result = filterTable($query);
		$result = mysqli_query($connect, $query);
        $queryResult = mysqli_num_rows($result);

        if($queryResult > 0){
			//show result**
        }
		else{
            echo "<script>alert('User Not Found')</script>";
        }
    }
	else{
		$query = "SELECT * FROM `register`";
		$search_result = filterTable($query);
		
	}

	function filterTable($query)
	{
		$connect=mysqli_connect("localhost", "root", "", "1");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<link rel= "stylesheet" href="admin.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arima:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<title>Admin Page</title>	
	</head>	

	<body>
		<div class="container">
			<div class="sidebar">
				<ul>
					<li>
						<a href="#">
							<i class="fa fa-user-secret"></i>
							<div class="title">Admin</div>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-user"></i>
							<div class="title">Registered User</div>
						</a>
					</li>
					<li>
						<a href="addproductform.php">
							<i class="fa fa-product-hunt" aria-hidden="true"></i>
							<div class="title">View Product</div>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-cog"></i>
							<div class="title">Settings</div>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-info-circle "></i>
							<div class="title">Help</div>
						</a>
					</li>
					<li>
						<a href="login.php">
							<i class="fa fa-sign-out" aria-hidden="true"></i>
							<div class="title">Log Out</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="main">
				<div class="top-bar">
					<p>Welcome Admin!</p>
					<i class="fas fa-bell"></i>
					<div class="user">
						<img src="image/user1.png">
					</div>
				</div>
				
			

				<div class="table">
					<div class="table_header">
						<p>User Details</p>

							<form action="admin.php" method="POST">
								<div>
								<input type="text" name="valueToSearch" placeholder="User">
								<button class="add_new">+ Add New </button>
								<input type ="submit" name="search" value="Search">
								</div>
							</form>

					</div>
					<div class="table_section">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>USERNAME</th>
									<th>PASSWORD</th>
									<th>EMAIL</th>
									<th>ACTION</th>
								</tr>

								<?php while($row = mysqli_fetch_array($search_result)):?>
									
									<tr>
										<td><?php echo $row['id'];?></td>
										<td><?php echo $row['username'];?></td>
										<td><?php echo $row['password'];?></td>
										<td><?php echo $row['email'];?></td>


										<td>
										<form action="del.php" method="POST">
                       						 <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                        					<input type="submit" name="delete" class="btn btn-danger" value="Delete">
                    					</form>
								</td>
									</tr>

									

								
								<?php endwhile;?>
								
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
					<div class="pagination">
						<div><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
						<div>1</div>
						<div>2</div>
						<div><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
					</div>

					<div class="">
                        <button onclick="window.print()" class="dis">Print</button>
                        <button class="dis">Cancel</button>
                    </div>

				</div>

			</div>
		</div>
	</body>
	
</html>