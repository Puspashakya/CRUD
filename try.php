<?php
	
		session_start();
		$con=mysqli_connect("localhost", "root", "", "user_db_online-store");

		if(mysqli_connect_error()) {
			echo"<script> 
			alert('cannot cononect to database'); 
			window.location.href='cart.php'; 
			</script>";
		exit();
		}

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(isset($_POST['purchase']))
		{
			$query1 = "INSERT INTO `order_manager`(`name`,`address`, `phone`) VALUES ('$_POST[name]','$_POST[address]','$_POST[phone]')";

			if(mysqli_query($con, $query1))
			{
				$Order_Id=mysqli_insert_id($con);
				$query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
				$stmt = mysqli_prepare($con, $query2);
				if($stmt)
				{
					mysqli_stmt_bind_param($stmt, "isii", $id, $name, $price, $quantity);
					foreach($_SESSION["cart"] as $key => $values)
					 {
						$Item_Name = $values['Item_Name'];
						$Price = $values['Price'];
						$Quantity = $values['Quantity'];
						mysqli_stmt_execute($stmt);
					}
					 /* unset($_SESSION['cart']);
								echo"<script> 
						alert('order placed'); 
						window.location.href='PayNow.php'; 
						</script>";    */
				}
				else
				{
							echo"<script> 
					alert('sql prepare error'); 
					window.location.href='cart.php'; 
					</script>";
				}
			}
			else
			{
				echo"<script> 
			alert('sql error'); 
			window.location.href='cart.php'; 
			</script>";

			}
		}
	}

?>