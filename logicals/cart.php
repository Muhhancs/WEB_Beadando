<?php
if(isset($_POST['pay']) && isset($_SESSION['user']))
{
		// Connecting
	$hostName = "localhost";
	$username = "kavewebshoptzkp";
	$password = "Szangril4!";
	$databaseName = "kavewebshoptzkp";
	$conn = new PDO("mysql:host=$hostName;dbname=$databaseName", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sqlDelete = "DELETE FROM cart WHERE username = :username";
$sth = $conn->prepare($sqlDelete);
$sth->execute(array(':username' => $_SESSION['user']));
	      
}
if(!isset($_SESSION['user']))
{
    $errormessage = "Please log in first!";
}
?>
