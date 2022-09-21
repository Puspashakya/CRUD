<?php 
	include ("header.php");
	//session_start();
	// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-3">
				<form action = "manage_cart.php" method="POST">
					<div class="card">
						<img src="datacable.jpg" class="card-img-top">
						<div class="card-body text-center">
							<h5 class="card-title">data cable</h5>
							<p class="card-text">Prince: Rs. 1500</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="data cable">
							<input type="hidden" name="Price" value="1500">
							
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3">
				<form action = "manage_cart.php" method="POST">
					<div class="card">
						<img src="keyboard1.png" class="card-img-top">
						<div class="card-body text-center">
							<h5 class="card-title">keyboard</h5>
							<p class="card-text">Prince: Rs. 1800</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="keyboard">
							<input type="hidden" name="Price" value="1900">
							
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3">
				<form action = "manage_cart.php" method="POST">
					<div class="card">
						<img src="laptop-charge.jpg" class="card-img-top">
						<div class="card-body text-center">
							<h5 class="card-title">Laptop charger</h5>
							<p class="card-text">Prince: Rs. 2500</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="laptop charger">
							<input type="hidden" name="Price" value="2500">
							
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-3">
				<form action = "manage_cart.php" method="POST">
					<div class="card">
						<img src="macbook.png" class="card-img-top">
						<div class="card-body text-center">
							<h5 class="card-title">Macbook</h5>
							<p class="card-text">Prince: Rs. 190000</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
							<input type="hidden" name="Item_Name" value="Mac book">
							<input type="hidden" name="Price" value="190000">
							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>