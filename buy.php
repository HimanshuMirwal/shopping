<?php
$conn = mysqli_connect("localhost","root","","shopping");
session_start();
?>

<?php

$data=@$_GET["id"];
{
	$query="delete from cart where srno='$data';";
	mysqli_query($conn,$query);
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
	//border:2px solid black;
}
#footer
{
	height:90px;
	width:1300px;
	background:linear-gradient(white,black);
	text-align:center;
	font-size:18px;
	font-weight:bolder;
	
}
</style>
</head>

<body>
		<div id="wrap">
        		
                <div id="top" style="//border:2px solid green">
                			SHOPPING DASHBOARD
                 </div> 
                 
                 <div id="cart" style="height:400px;width:100%">
                 <a href="logout.php" style="text-align:right;color:
                    #00C;"><h2>click here to logout</h2></a>
                    <a href="shopping.php" style="text-align:right;color:
                    #00C;"><h3> click heremove to dashboard</h3></a>
                    <h1 style="text-align:center;color:
                    #3F3;line-height:300px;border:2px solid">
                    your order will send to you soon
                    </h1>
                 </div>
                 
                 
                 <div id="footer">
     
    	copyrigths &copy; next alogorithms All Rights Reserved.
        <br>FOLLOW US ON <br>
        <img src="home/facebook-icon-transparent-background-20.png" height="40px" width="40px">
        
        <img src="home/instagram-png-instagram-png-logo-1455.png" height="40px" width="40px">
        <img src="home/natural-health-thermography-digital-infrared-thermal-123747.png" height="40px" width="40px">
    </div>        
           </div>
</body>


</html>