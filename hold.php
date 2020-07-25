<?php $conn=mysqli_connect("localhost","root","","shopping"); ?>
<?php
session_start();
?>


<?php  
// print_r($_POST);
if(isset($_POST["btn_sign"]))
{
	$name=$_POST["log"];
	$pass=$_POST["pass"];
	$email=$_POST["email"];
	$number=$_POST["no"];
	
	// if($name == "")
	// {
	// 	header("location:signup.php?msg='please enter the  name'");	
	// }
	// else 
	// if($pass == "")
	// {
	// 	header("location:signup.php?msg='please enter the password '");
	// }
	// else 
	// if($email == "")
	// {
	// 	header("location:signup.php?msg='please enter the Email '");
	// }
	// else 
	// if($number == "")
	// {
	// 	header("location:signup.php?msg='Please enter the mobile number.'");
	// }
	// else
	// {
		$query="insert into signup (srno,name,password,mobile,email)
		values('','$name','$pass','$number','$email')";
		mysqli_query($conn,$query);
		header("location:signup.php");
	// }
} 
?>

<?php

if(isset($_POST["log_btn"]))
{
	echo "hello";
	$user=$_POST["log"];
	$password=$_POST["pass"];
	$query_login="select * from signup where name='$user' and password='$password'";
	$val=mysqli_query($conn,$query_login);
	print_r($val);
	$final=mysqli_fetch_array($val);
	//echo  $final[0];
		if(mysqli_num_rows($val) > 0)
		{
			$_SESSION['user_id']=$final[0];
			$_SESSION['user']=$user;
			echo $_SESSION['user'];
			header("location:shopping.php");
		}
		else
		{
			header("location:login.php?a='ERROR ! please check your name and password'");
		}
}

?>


<?php
if(isset($_GET["product_id"]))
{
	echo "hello";
	echo $cart_table=$_GET["table"];
	echo	$cart_product=$_GET["product_id"];
	echo	$cart_price=$_GET["price"];
	echo	$cart_title=$_GET["title"];
	echo	$status="ADDED TO CART";
	echo $cart_user=$_SESSION["user"];
	echo $cart_userid=$_SESSION["user_id"];

	$cart_query="insert into cart(user_id,user,title,price,product_id,status,cart_table)values('$cart_userid','$cart_user','$cart_title','$cart_price','$cart_product','$status','$cart_table');";
	mysqli_query($conn,$cart_query) or die("not working ");
	header("location:shopping.php?cart='$cart_product'&table='$cart_table'");
}
?>