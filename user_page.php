<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color: lightpink;">
   
<div class="container">

   <div class="content">
      <h3>Hi, <br>  <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>


      <a href="logout.php" class="btn" style="margin:5px;">logout</a> 
      <br>
      <a href="index.php" class="btn" style="margin:5px;">index</a> 
      <br>
      <a href="cart.php" class="btn" style="margin:5px;">cart </a> 
      <br>
   </div>
</div>
</body>
</html>