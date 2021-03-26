<?php  
include 'koneksi.php';

	$id_artikel= $_GET['id'];
	$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id='$id_artikel' ");
	$row = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Artikel</title>
	
</head>
<body>
	<div id="container">
	<h1>Form Edit Data</h1>
		
		<form action="prosesedit.php" method="POST">
			<p>
				<input type="hidden" name="idartikel" value="<?= $row['id'];?>"/>
			</p>
			<p>
				<b>Judul :</b><br>
				<input type="text" name="title" value="<?= $row['judul_artikel'];?>" />
			</p>
			<p>
				<b>Penulis :</b><br>
				<input type="text" name="author" value="<?= $row['penulis_artikel'];?>" />
			</p>
			<p>
				<b>Lead :</b><br>
				<textarea name="abstraksi" rows="4" cols="30"> <?= $row['lead_artikel'];?></textarea>
			</p>
			<p>
				<b>Content :</b><br>
				<textarea name="konten" rows="8" cols="45"><?= $row['content_artikel'];?></textarea>
			</p>
			
			<p>
				<input type="submit" name="edit" value="Update" class="tombol"/> 
			</p>
		</form>
	</div>
</body>
</html>