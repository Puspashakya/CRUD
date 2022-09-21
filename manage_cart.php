<?php
session_start();   // session varaible jata jaat xa teta chalxa
//session_destroy();    // paxi na chai ne bela uncomment and run it
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['Add_To_Cart']))   // add to cart ma click garda  post ho ta!!
        {
            if(isset($_SESSION['cart']))     // cart vanne variable xa ta 
            {
                $myitems=array_column($_SESSION['cart'], 'Item_Name');
                if(in_array($_POST['Item_Name'],$myitems))       //in_array khojxa kunai specific data xa ta array
                {
                    echo "<script> 
                    alert ('Item Already Added ');
                    window.location.href= ('index1.php');    
                    </script> ";
                } 
                else 
                {     
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1);
                //print_r($_SESSION['cart']);     //print_r  array print garna ko lagi ho
                    echo "<script> 
                        alert ('Item  Added ');
                        window.location.href= ('index1.php');    
                        </script> ";
                }
            }
            else
            {
                $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1);
                //print_r($_SESSION['cart']);
                echo "<script> 
                    alert ('Item  Added ');
                    window.location.href= ('index1.php');    
                    </script> ";
            }
        }
        if(isset($_POST['Remove_Item']))   //remove_item vanne click vako xa vane post ko through bata
        {
            foreach($_SESSION['cart'] as $key => $value)
            {
                if($value['Item_Name']==$_POST['Item_Name'])
                {
                 unset($_SESSION['cart'][$key]);
                 $_SESSION['cart']=array_values($_SESSION['cart']);
                 echo "<script>
                 alert('Item Removed');
                 window.location.href='mycart.php';
                 </script>";
                }
            }
        }
        if(isset($_POST['Mod_Quantity']))
        {
             foreach($_SESSION['cart'] as $key => $value)
            {
                if($value['Item_Name']==$_POST['Item_Name'])
                {

                 $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
                 echo "<script>
                 window.location.href='mycart.php';
                 </script>";
                }
            }
        }
    } 
?>