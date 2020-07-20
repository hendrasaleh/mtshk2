<html>
<head>
	<title>excellenz-data</title>
</head>
<body>
	<form action="aksi.php" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<br />
		<p><input type="text" name="nama" placeholder="Tulis nama lengkap di sini"></p>
		<p>
		    <select name="kelas">
		        <option value="8-0">Pilih Kelas</option>
		        <option value="8-A">8-A</option>
		        <option value="8-B">8-B</option>
		        <option value="8-C">8-C</option>
		        <option value="8-D">8-D</option>
		        <option value="8-E">8-E</option>
		        <option value="8-F">8-F</option>
		        <option value="8-G">8-G</option>
		        <option value="8-H">8-H</option>
		    </select>
        </p>
		<p><font face="Calibri">Maksimal ukuran gambar adalah 1Mb</font></p>
		<input type="submit" name="upload" value="Upload">
	</form>
</body>
</html>