<?php

$conn = mysqli_connect("localhost","root","","shopping");
session_start();
?>




<?php
//unset($_SESSION['user']);

$query="update short set status='add to cart' ;";
mysqli_query($conn,$query);


$query="update shirt set status='add to cart' ;";
mysqli_query($conn,$query);


$query="update watch set status='add to cart' ;";
mysqli_query($conn,$query);


session_destroy();
header("location:index.php");
echo $_SESSION['user'];
?>