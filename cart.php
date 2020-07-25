<?php
$conn = mysqli_connect("localhost","root","","shopping");
session_start();
?>

<?php

$user_id=@$_SESSION['user_id'];
$product_id=@$_GET["product_id"];
$product_name=@$_GET["product_name"];
$cart_table=@$_GET["cart_table"];
{
	$query="delete from cart where user_id='$user_id' and product_id='$product_id'  and title='$product_name'";
	mysqli_query($conn,$query);
	
}




if($cart_table == "short")
	{
	$update="UPDATE  `shopping`.`short` SET  `status` =  'add to cart' WHERE  `short`.`srno` =$product_id ;";
	mysqli_query($conn,$update);
	}
	
	
	if($cart_table == "shirt")
	{
	$update="UPDATE  `shopping`.`shirt` SET  `status` =  'add to cart' WHERE  `shirt`.`srno` =$product_id ;";
	mysqli_query($conn,$update);
	}
	
	
	if($cart_table == "watch")
	{
	$update="UPDATE  `shopping`.`watch` SET  `status` =  'addto cart' WHERE  `watch`.`srno` =$product_id ;";
	mysqli_query($conn,$update);
	}

?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="cart.css">
<style>
#cart 
{
	height:auto;
	width:1200px;
	margin:auto;
	border:2px solid black;
}

</style>
</head>

<body>
		<div id="wrap">
        		
                <div id="top" style="border:2px solid green">
                			SHOPPING DASHBOARD
                 </div> 
                 
                 <div id="cart">
                    
                    
                    <table  width="1200px">
                    	<tr bgcolor="#00CCFF">
                        	<th>user id</th>
                            <th>USER</th>
                            <th>product id</th>
                            <th>TITLE</th>
                            <th>PRICE</th>
                            
                            <th>remove order </th>
                            
                        </tr>
                        
                        <?php 
						$user_id=@$_SESSION['user_id'];
		$query="select *from cart where user_id='$user_id'; ";
		$val=mysqli_query($conn,$query);
		while($final=mysqli_fetch_array($val))
		{
			

?>
                        
                        
                        <tr>
                        	<th><?php echo $final[0];?></th>
                            <th><?php echo $final[1];?></th>
                           	<th><?php echo $final[4];?></th>
                            <th><?php echo $final[2];?></th>
                            <th><?php echo $final[3];?></th>
                            <th><a href="cart.php?product_id=<?php echo $final[4]?>&product_name=<?php echo $final[2]?>&cart_table=<?php echo $final[6]?>">remove</a></th>
                        </tr>
           <?php
           
		}
		   ?>
           <tr>
           <th colspan="6" style="background:#0F3;"><a href="buy.php" style="text-decoration:none">BUY</a></th>
           </tr>
           <tr>
           <th colspan="6" style="background:#FF6;"><a href="shopping.php" style="text-decoration:none">move to dash board</a></th>
           </tr>
                    </table>
                 </div>        
           </div>
</body>


</html>