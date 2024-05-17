<?php include("../database.php");

if(isset($_SESSION["email"])){
	$email = $_SESSION["email"];
	$sql = "SELECT username FROM users WHERE email = '$email';";
	$sqlTable = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($sqlTable);
}
?>
