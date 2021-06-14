<?php 
	include '../model/tugasdatabase.php';
	$db = new database();
 ?>


<h3>Tambah Data User</h3>

	<form action="../controler/tugasproses.php?aksi=update" method="post">
	<?php foreach ($db->edit($_GET['id']) as $data) { ?>
		<table>
			<tr>
				<td>Prodi</td>
				<td>
				<input type="hidden" name="id" value="<?php echo $data['id']?>">
				<input type="text" name="prodi" value="<?php echo $data['prodi']?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data['nama']?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</body>
</html>