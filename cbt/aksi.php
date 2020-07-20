<!DOCTYPE html>
<html>
	<head>
		<title>excellenz-data</title>
	</head>
	<body>
		<?php 
		include 'koneksi.php';
		$nama_santri = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$namasantri0 = strtolower($nama_santri);
		$namasantri = str_replace(" ","-",$namasantri0);
		$kelassantri = strtolower($kelas);
		$data = $kelassantri."-".$namasantri;
		$dbh = new database();
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$namafile = $data.'-'.$_FILES['file']['name'];
			$x = explode('.', $namafile);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$namafile);
					$query = $dbh->getDb()->query("INSERT INTO upload VALUES (NULL, '$kelas', '$nama_santri','$namafile')");
					if($query){
						echo '<font face="Calibri">FILE BERHASIL DI UPLOAD</font>';
					}else{
						echo '<font face="Calibri">GAGAL MENGUPLOAD GAMBAR</font>';
					}
				}else{
					echo '<font face="Calibri">UKURAN FILE TERLALU BESAR</font>';
				}
			}else{
				echo '<font face="Calibri">EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN</font>';
			}
		}
		?>
	</body>
</html>