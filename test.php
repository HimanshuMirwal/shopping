<?php
$conn = mysqli_connect("localhost","root","","shopping");
session_start();
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="shopping.css">
<style>
#footer
{
	height:90px;
	width:1300px;
	background:linear-gradient(white,black);
	text-align:center;
	font-size:18px;
	font-weight:bolder;
	border-top: 1px solid;
}
#main,#main1,#main2
{
	height:750px;
	width:1250px;
	//border:2px solid black;
	overflow:auto;
	margin:auto;
}
#wrapper,#wrapper1,#wrapper2
{
	height:300px;
	width:300px;
	//background:#666;
	float:left;
	/* border-bottom:2px solid black */
	
	
}

#img,#img1,#img2
{
	height:200px;
	width:300px;
	background:#CCC;
	background-position: center;
    background-size: cover;
    position: relative;
}


#name,#name1,#name2
{
	height:50px;
	width:300px;
	//background:#F00;
	text-align:center;
	color:black;
	font-size:24px;
}

#btn1,#btn1_1,#btn1_2
{
	height:50px;
	width:300px;
}
#btn2,#btn2_1,#btn2_2
{
	font-size:16px;
	font-weight:bold;
	background:#3F3;
	padding:5px;
	margin-left:135px;
	margin-top:10px;
}
#cart
{
	height:45px;
	width:300px;
	//border:2px solid black;
	float:right;
	margin-top:350px;
}
#cart table th
{
	padding:15;
	//border:1px solid black;
	
}
#btn_2,#btn1_2,#btn1_22
{
	height:35px;
	width:260px;
	margin:auto;
	text-align:center;
	background:linear-gradient(90deg,blue,navy,blue);
	font-weight:bolder;
}




#btn1 a,#btn1_1 a,#wrapper2 a 
{
	text-decoration:none;
}



#btn_2,#btn1_2 ,#btn1_22 
{
    text-decoration: none;
    color: #FFF;
    font-size: x-large;
}


</style>

<?php
if(isset($_GET['cart']))
{
	$cart=$_GET['cart'];
	echo "<style>#btn_2{background:yellow;}</style>";
}
?>

</head>

<body>
		<div id="wrap">
        		
                <div id="top" style="border:2px solid green">
                	
                             
                       
                
                
                </div>
                
               
                
                
       
        <h1 style="color:#000;text-align:center;background:#999">SHORTS</h1>
        		<div id="main">
             
<?php 
		$query="select *from short";
		$val=mysqli_query($conn,$query);
		while($final=mysqli_fetch_array($val))
		{
			

?>



  
<div id="wrapper">

	<div id="img">
    <img src="<?php echo $final[3]?>" height="200px" width="300px">
    </div>
	
    <div id="name">
    <b><?php echo $final[1]?></b>
    </div>
		
    
	
	
	  
	<div id="btn1">
    
	<a href="login.php" id="shirt" > 
    <div id="btn_2"  >
    
    
    
      Buy
      
	 </div>
	</a>
     
   
    	
        
    </div>
    
</div>
	

	

<?php

		}
?>
</div>
	



					<hr>
                	<h1 style="color:#000;text-align:center;background:#999">T SHIRTS</h1>
					<hr>
 		<div id="main1">
<?php 
		$query="select *from shirt";
		$val=mysqli_query($conn,$query);
		while($final=mysqli_fetch_array($val))
		{

?>




<div id="wrapper1">

	<div id="img1">
    <img src="<?php echo $final[3]?>" height="200px" width="300px">
    </div>
	
    <div id="name1">
    <b><?php echo $final[1]?></b>
    </div>

	<div id="btn1_1">
	<a href="login.php" id="shirt" > 

    	<div id="btn1_2"  onMouseDown="abc()">
    
      Buy
       
	 </div>
	 </a>

    </div>
</div>

<?php

		}
?>
</div>
       
       
       
       
 
 
 
 			<hr>
                	<h1 style="color:#000;text-align:center;background:#999">WATCHES</h1>
					<hr>
 		<div id="main2">
<?php 
		$query="select *from watch";
		$val=mysqli_query($conn,$query);
		while($final=mysqli_fetch_array($val))
		{

?>




<div id="wrapper2">

	<div id="img2">
    <img src="<?php echo $final[3]?>" height="200px" width="300px">
    </div>
	
    <div id="name2">
    <b><?php echo $final[1]?></b>
    </div>

	<a href="login.php" id="shirt" > 
	<div id="btn1_22"  onMouseDown="abc()">
    
      Buy
	 </div>
	 </a>

</div>

<?php

		}
?>
</div>      
        
	 </div>
	 
	 <div id="footer">
    	copyrigths &copy; next alogorithms All Rights Reserved.
        <br>FOLLOW US ON <br>
        <img src="home/facebook-icon-transparent-background-20.png" height="40px" width="40px">
        
        <img src="home/instagram-png-instagram-png-logo-1455.png" height="40px" width="40px">
        <img src="home/natural-health-thermography-digital-infrared-thermal-123747.png" height="40px" width="40px">
    </div>
</body>


</html>