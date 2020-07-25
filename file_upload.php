<?php
	$conn = mysqli_connect("localhost","root","","shopping");;

?>



<?php 
	print_r($_POST);
	//print_r($_FILES['file_upload']);
	
	if(isset($_POST["shirt"]))
	{
		$title=$_POST["title"];
		$descript=$_POST["descript"];
		$name=$_FILES['file_upload']['name'];
		$temp=$_FILES['file_upload']['tmp_name'];
		echo $name  . "  " .$temp;
		$destination="store/".$name;
		move_uploaded_file($temp,$destination);
		$query="insert into shirt(srno,title,description,file_upload)
		values('','$title','$descript','$destination');";
		mysqli_query($conn,$query);
		
	}
	
	if(isset($_POST["shorts"]))
	{
		echo "hello";
		$title=$_POST["title"];
		$descript=$_POST["descript"];
		$name=$_FILES['file_upload']['name'];
		$temp=$_FILES['file_upload']['tmp_name'];
		echo $name  . "  " .$temp;
		$destination="store/".$name;
		move_uploaded_file($temp,$destination);
		$query="insert into short(srno,title,description,file_upload)
		values('','$title','$descript','$destination');";
		mysqli_query($conn,$query);
		
	}
	if(isset($_POST["watch"]))
	{
		echo "hello";
		$title=$_POST["title"];
		$descript=$_POST["descript"];
		$name=$_FILES['file_upload']['name'];
		$temp=$_FILES['file_upload']['tmp_name'];
		echo $name  . "  " .$temp;
		$destination="store/".$name;
		move_uploaded_file($temp,$destination);
		$query="insert into watch(srno,title,description,file_upload)
		values('','$title','$descript','$destination');";
		mysqli_query($conn,$query);
		
	}
	if(isset($_POST["shoes"]))
	{
		echo "hello";
		$title=$_POST["title"];
		$descript=$_POST["descript"];
		$name=$_FILES['file_upload']['name'];
		$temp=$_FILES['file_upload']['tmp_name'];
		echo $name  . "  " .$temp;
		$destination="store/".$name;
		move_uploaded_file($temp,$destination);
		$query="insert into shoes(srno,title,description,file_upload)
		values('','$title','$descript','$destination');";
		mysqli_query($conn,$query);
	}

?>