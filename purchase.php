<?php
session_start();   // session varaible jata jaat xa teta chalxa
//session_destroy();    // paxi na chai ne bela uncomment and run it
$con=mysqli_connect("localhost", "root", "", "user_db_online-store");

if(mysqli_connect_error()) {
			echo"<script> 
			alert('cannot cononect to database'); 
			window.location.href='mycart.php'; 
			</script>";
		exit();
		}


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    	if(isset($_POST['purchase']))   //yedi purchase name vako button click gareko xa vane
    	{
    		$query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[Full_Name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
    		if(mysqli_query($con, $query1))
    		{
    			$Order_Id=mysqli_insert_id($con);
				$query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
				$stmt = mysqli_prepare($con, $query2);
				if($stmt)
				{
					mysqli_stmt_bind_param($stmt, "isii", $Order_Id, $Item_Name, $Price, $Quantity);
					foreach($_SESSION["cart"] as $key => $values)
					 {
						$Item_Name = $values['Item_Name'];
						$Price = $values['Price'];
						$Quantity = $values['Quantity'];
						mysqli_stmt_execute($stmt);
					}
					unset($_SESSION['cart']);
					echo"<script> 
						alert('order placed'); 
						window.location.href='PayNow.php'; 
						</script>";
				}
				else 
				{
				echo"<script> 
					alert('sql Query prepare Error'); 
					window.location.href='mycart.php'; 
			</script>";	
				}
    		}
    		else
    		{
    			/*echo"<script> 
			alert('sql error'); 
			window.location.href='mycart.php'; 
			</script>";	 */
    		}

    	}
    }

    ?>