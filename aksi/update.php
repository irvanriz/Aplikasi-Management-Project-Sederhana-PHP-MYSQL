<?php
$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "management_project";

$link = mysqli_connect($host, $username, $password, $dbname) or die(mysqli_error());

$status = $_POST['status'];

if (isset($_POST['submit']))
{
$sql    = "UPDATE prject SET status='$status' WHERE id='$id'";
$result = mysqli_query($link, $sql);


if (!$result) {
	echo "Gagal Insert ke database";
}
else
{
	header('Location:../index.php');
}
}
else
{
	header('Location:../index.php');
}

 ?>