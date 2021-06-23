<?php
$host     = "localhost";
$username = "root";
$password = "";
$dbname   = "management_project";

$link = mysqli_connect($host, $username, $password, $dbname) or die(mysqli_error());


$nama_project = $_POST['nama_project'];
$id_cabang = $_POST['id_cabang'];
$tgl_project = $_POST['tgl_project'];
$deskripsi = $_POST['deskripsi'];
$status = $_POST['status'];

if (isset($_POST['submit']))
{
$sql    = "INSERT INTO project SET nama_project='$_POST[nama_project]',id_cabang='$_POST[id_cabang]',tgl_project='$_POST[tgl_project]',deskripsi='$_POST[deskripsi]',status='$_POST[status]'";
$result = mysqli_query($link, $sql);

if (!$result) {
	echo "Gagal Insert ke database";
}
else
{
	header('Location:../project.php');
}
}
else
{
	header('Location:../project.php');
}

 ?>