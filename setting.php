<?php
$conn = mysqli_connect("localhost","root","","shopping");
session_start();
?>


<?php
if(isset($_POST["btn"]))
{
	$txt1=$_POST["txt1"];
	$txt2=$_POST["txt2"];
	if($txt1 != $txt2)
	{
		echo "<script> alert('incorrect')</script>";
	}
	else
	{ 
		$user_id=$_SESSION['user_id'];
 		
		$query="UPDATE  `shopping`.`signup` SET  `password` =  '$txt1' WHERE  `signup`.`srno` ='$user_id' LIMIT 1 ";
		mysqli_query($conn,$query);
		echo "<script> alert('password has been changed') </script>";
	}
	
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
                    
                    <form name="setting" method="post" action="">
                    <table  width="500px"  style="margin-left:400px">
                    	<tr>
                        	<th>enter new password</th>
							<td><input type="text" name="txt1" value=""></td>
	                    </tr>
                        <tr>
                        	<th>re-enter new password</th>
							<td><input type="text" name="txt2" value=""></td>
	                    </tr>
                        <tr>
                        	<th >
                            	<input type="submit" value="change" name="btn">
                            </th>
                            <th colspan="2">
                            	<a href="shopping.php">move to shop </a>
                            </th>
                        </tr>
                        
                        
           
                    </table>
                    </form>
                 </div>        
           </div>
</body>


</html>