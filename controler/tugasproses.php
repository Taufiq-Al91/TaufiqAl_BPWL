<?php 
	include "../model/tugasdatabase.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->input($_POST['prodi'], $_POST['nama'], $_POST['email']);		
		header("location:../view/tugastampil.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['id']);
		header("location:../view/tugastampil.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['id'], $_POST['prodi'], $_POST['nama'], $_POST['email']);
		header("location:../view/tugastampil.php");
	}
 ?>