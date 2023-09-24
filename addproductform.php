<?php

include 'connect.php';

if(isset($_POST['add_product'])){

   $product_description = $_POST['product_description'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = '2/'.$product_image;

   if(empty($product_description) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO addproductform(name, price, image) VALUES('$product_description', '$product_price', '$product_image')";
      $upload = mysqli_query($connect,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($connect, "DELETE FROM addproductform WHERE id = $id");
   header('location:addproductform.php');
};

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<link rel= "stylesheet" href="addproductform.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arima:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<title>Add Product Page</title>	
	</head>	

    <body>
        
            <?php

            if(isset($message)){
            foreach($message as $message){
                echo '<span class="message">'.$message.'</span>';
            }
            }

            ?>
            
            <div class="container">

            <div class="admin-product-form-container">

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3>Add a new product</h3>
                    <input type="text" placeholder="Enter Decription" name="product_description" class="box">
                    <input type="number" placeholder="Enter Product Price" name="product_price" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                    <input type="submit" class="btn" name="add_product" value="add product">
                </form>

            </div>

            <?php

            $select = mysqli_query($connect, "SELECT * FROM addproductform");
            
            ?>
            <div class="product-display">
                <table class="product-display-table">
                    <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php while($row = mysqli_fetch_assoc($select)){ ?>
                    <tr>
                        <td><img src="2/<?php echo $row['image']; ?>" height="100" alt=""></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>&#8369;<?php echo $row['price']; ?></td>
                        <td>
                        
                        <a href="addproductform.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                        </td>
                    </tr>
                <?php } ?>
                </table>
            </div>

            </div>

            <div class="">
                        <button onclick="window.print()" class="dis">Print</button>
                        <a href="admin.php"><button class="dis">Back</button></a>
            </div>


    </body>
</html>