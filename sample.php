<?php
$conn = mysqli_connect("localhost","root","","shopping");

?>

<html>

<head>
<style>
#main
{
	height:500px;
	width:1250px;
	border:2px solid black;
	overflow:auto;
}
#wrapper
{
	height:400px;
	width:400px;
	background:#666;
	float:left;
	margin:auto;
	
}

#img
{
	height:300px;
	width:400px;
	background:#CCC;
}


#name
{
	height:50px;
	width:400px;
	background:#F00;
	text-align:center;
	color:#FFF;
	font-size:24px;
}

#btn1
{
	height:50px;
	width:400px;
	background:#30F;
}
#btn2
{
	font-size:16px;
	font-weight:bold;
	background:#3F3;
	padding:5px;
	margin-left:185px;
	margin-top:10px;
}
</style>
</head>

<body>
<div id="main">
<?php 
		$query="select *from shirt";
		$val=mysqli_query($conn,$query);
		while($final=mysqli_fetch_array($val))
		{

?>




<div id="wrapper">

	<div id="img">
    <img src="<?php echo $final[3]?>" height="300px" width="400px">
    </div>
	
    <div id="name">
    <b><?php echo $final[1]?></b>
    </div>

	<div id="btn1">
    	<input type="button" value="BUY" id="btn2">
    </div>
</div>

<?php

		}
?>
</div>
</body>


</html>
