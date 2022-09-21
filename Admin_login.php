    
<?php require('Connection.php') ?>
    
    <?php

        function input_filter($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        if(isset($_POST['Login']))
        {
            $Admin_Name=input_filter($_POST['Admin_Name']);
            $Admin_Password=input_filter($_POST['Admin_Password']);

            $Admin_Name=mysqli_real_escape_string($con, $Admin_Name);   // special stirng haru ignore gardinaxa
            $Admin_Password=mysqli_real_escape_string($con, $Admin_Password);   // special stirng haru ignore gardinaxa

            //$query="SELECT * FROM 'admin_login' WHERE 'Admin_Name' =? AND 'Admin_Password'=?";
            $query= "SELECT * FROM admin_login WHERE 'Admin_Name' =? AND 'Admin_Password'=?";
            
            if($stmt=mysqli_prepare($con, $query))
            {
                echo"prepare";
                mysqli_stmt_bind_param($stmt, "ss", $Admin_Name, $Admin_Password); //binding value ot the template
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1)
                {
                    echo "details matched";
                    //session_start();
                    //$_SESSION['AdminLoginId'] =$AdminName;
                    //header("location: Admin_panel.php");
                }
                else
                {
                    echo "<script> alert('Invalid Admin Name or Password');</script>";
                }
            }
            else
            {
                echo"<script> alert('SQL query cannot be prepared'); </script>";
            }

            
        }
    ?> 


    <!DOCTYPE html>
    <html>
    <head>
        <title>Admin login panel</title>
    </head>
    <body>
    <div class="container">
        <div class="myform">
            <form method = "POST"  action="<?php echo $_SERVER['PHP_SELF'] ?> ">
                <h2> ADMIN LOING</h2>
                <input type="text" placeholder="Admin_Name" name="Admin_Name">
                <input type="Password" placeholder="Admin_Password" name="Admin_Password">
                <button type= "submit" name="Login"> LOGIN</button>
            </form>
        </div>
        <div class="image">
            <img src="login_img.jpg">
        </div>
    </div>
  
    </body>
    </html>



 